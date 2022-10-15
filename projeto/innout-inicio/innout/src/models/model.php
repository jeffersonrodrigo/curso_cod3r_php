<?php

class Model {
    protected static $tableName = '';
    protected static $columns = [];
    protected $values = [];

    function __construct($arr) {
        $this->loadFromArray($arr);
    }

    public function loadFromArray($arr) {
        if($arr) {
            foreach($arr as $key => $value) {
                $this->$key = $value;
            }
        }
    }

    public function __get($key) {
        return $this->values[$key];
    }

    public function __set($key, $value) {
        $this->values[$key] = $value;
    }

    public static function getOne($filters = [], $columns = '*') {//pega apenas um único registro
        $class = get_called_class();// atribuindo a função a variavel $class # a função diz qual classe que esta a chamando no momento
        $result = static::getResultSetFromSelect($filters, $columns);
        
        return $result ? new $class($result->fetch_assoc()) : null; // se estiver setado vai instanciar passando uma classe(new $class($result->fetch_assoc())) caso contrario vai retornar nulo
    }

    public static function get($filters = [], $columns = '*') { // funcionalidade que pega varios registros e gera objetos através das linhas
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

    public function save() { // gerar de forma automática o comando para inserir no banco de dados um determinado modelo
        $sql = "INSERT INTO " . static::$tableName . " ("
            . implode(",", static::$columns) . ") VALUES (";
        foreach(static::$columns as $col) {
            $sql .= static::getFormatedValue($this->$col) . ",";
        }
        $sql[strlen($sql) - 1] = ')';
        $id = Database::executeSQL($sql);
        $this->id = $id;
    }

    private static function getFilters($filters) {
        $sql = '';
        if(count($filters) > 0) {
            $sql .= " WHERE 1 = 1"; // expressao verdadeira q nao afetara nada mas fara com que quaquer outra condição ou elemento que for passado e for pecorrer aqui no foreach saberemos que antes dele vai ter um and
            foreach($filters as $column => $value) {
            $sql .= " AND ${column} = " . static::getFormatedValue($value);
            }
        }
        return $sql;
    }

    private static function getFormatedValue($value) { // retornar valor formatado dependendo do tipo do valor q passar
        if(is_null($value)) {
            return "null";
        } elseif(gettype($value) === 'string') {
            return "'${value}'";
        } else {
            return $value;
        }
    }
}