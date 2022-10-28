<?php

class Model {
    protected static $tableName = '';
    protected static $columns = [];
    protected $values = [];

    function __construct($arr, $sanitize = true) {
        $this->loadFromArray($arr, $sanitize = true);
    }

    public function loadFromArray($arr, $sanitize = true) {
        if($arr) {
            // $conn = Database::getConnection();
            foreach($arr as $key => $value) {
                $cleanValue = $value;
                if($sanitize && isset($cleanValue)) {
                    $cleanValue = strip_tags(trim($cleanValue));
                    $cleanValue = htmlentities($cleanValue, ENT_NOQUOTES);
                    // $cleanValue = mysqli_real_escape_string($conn, $cleanValue);
                }
                $this->$key = $cleanValue;
            }
            // $conn->close();
        }
    }

    public function __get($key) {
        return $this->values[$key];
    }

    public function __set($key, $value) {
        $this->values[$key] = $value;
    }

    public function getValues() {
        return $this->values;
    }

    public static function getOne($filters = [], $columns = '*') {
        //pega apenas um único registro
        $class = get_called_class();
        // atribuindo a função a variavel $class # a função diz qual classe que esta a chamando no momento
        $result = static::getResultSetFromSelect($filters, $columns);
        
        return $result ? new $class($result->fetch_assoc()) : null;
        // se estiver setado vai instanciar passando uma classe(new $class($result->fetch_assoc())) caso contrario vai retornar nulo
    }

    public static function get($filters = [], $columns = '*') {
        // funcionalidade que pega varios registros e gera objetos através das linhas
        $objects = [];
        $result = static::getResultSetFromSelect($filters, $columns);
        if($result) {
            $class = get_called_class();
            while($row = $result->fetch_assoc()) {
                array_push($objects, new $class($row));
            }
        }
        return $objects;
    }

    public static function getResultSetFromSelect($filters = [], $columns = '*') {
        $sql = "SELECT ${columns} FROM "
            . static::$tableName
            . static::getFilters($filters);
        $result = Database::getResultFromQuery($sql);
        if($result->num_rows === 0) {
            return null;
        } else {
            return $result;
        }
    }

    public function insert() {
        // gerar de forma automática o comando para inserir no banco de dados um determinado modelo
        $sql = "INSERT INTO " . static::$tableName . " ("
            . implode(",", static::$columns) . ") VALUES (";
        foreach(static::$columns as $col) {
            $sql .= static::getFormatedValue($this->$col) . ",";
            //getFormatedValue faz um tratamento sobre os dados formatados
        }
        $sql[strlen($sql) - 1] = ')';
        $id = Database::executeSQL($sql);
        $this->id = $id;
    }

    public function update() {
        //função para fazer atualização dos dados
        $sql = "UPDATE " . static::$tableName . " SET ";
        //consegue nome da tabela através da propriedade estática static::
        foreach(static::$columns as $col) {
            //foreach para pecorrer dentro das colunas
            $sql .= " ${col} = " . static::getFormatedValue($this->$col) . ",";
            //getFormatedValue faz um tratamento sobre os dados formatados
            // usando variavel $col pois assim o nome que estiver sendo usado nessa variavel vai ser usado para acessar o atributo dentro do $this
        }
        $sql[strlen($sql) - 1] = ' ';
        $sql .= "WHERE id = {$this->id}";
        Database::executeSQL($sql);
    }

    public static function getCount($filters = []) {
        $result = static::getResultSetFromSelect(
            $filters, 'count(*) as count');
        return $result->fetch_assoc()['count'];
    }

    public function delete() {
        static::deleteById($this->id);
    }

    public static function deleteById($id) {
        $sql = "DELETE FROM " . static::$tableName . " WHERE id = {$id}";
        Database::executeSQL(($sql));
    }

    private static function getFilters($filters) {
        $sql = '';
        if(count($filters) > 0) {
            $sql .= " WHERE 1 = 1";
            // expressao verdadeira q nao afetara nada mas fara com que quaquer outra condição ou elemento que for passado 
            //e for pecorrer aqui no foreach saberemos que antes dele vai ter um and
            foreach($filters as $column => $value) {
                if($column == 'raw') {
                    $sql .= " AND {$value}";
                } else {
                    $sql .= " AND ${column} = " . static::getFormatedValue($value);
                }
            }
        }
        return $sql;
    }

    private static function getFormatedValue($value) {
        // retornar valor formatado dependendo do tipo do valor q passar
        if(is_null($value)) {
            return "null";
        } elseif(gettype($value) === 'string') {
            return "'${value}'";
        } else {
            return $value;
        }
    }
}