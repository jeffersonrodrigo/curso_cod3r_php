<?php

class WorkingHours extends Model {
    protected static $tableName = 'working_hours';
    protected static $columns = [
        'id',
        'user_id',
        'work_date',
        'time1',
        'time2',
        'time3',
        'time4',
        'worked_time'
    ];

    public static function loadFromUserAndDate($userId, $workDate) {//esse metodo vai tentar pegar do banco registro, caso ele consiga  ele retorna registro, caso contrario ele vai criar uma nova instância colocando user_id, dia de trabalho e worked_time
        $registry = self::getOne(['user_id' => $userId, 'work_date' => $workDate]);

        if(!$registry) {
            $registry = new WorkingHours([
                'user_id' => $userId,
                'work_date' => $workDate,
                'worked_time' => 0
            ]);
        }

        return $registry;
    }

    public function getNextTime() {//função para pegar proximo time (batimento)
        if(!$this->time1) return 'time1';//basicamente irá ver se o time1 ja esta preenchido, se nao estiver vai o preencher, se estiver vai para o proximo
        if(!$this->time2) return 'time2';
        if(!$this->time3) return 'time3';
        if(!$this->time4) return 'time4';
        return null;//caso todos ja estejam preenchidos retorna nulo, para dizer q nao existe mais nenhum batimento que precisa ser feito naquele dia
    }

    public function innout($time) {//função "Bater o ponto" #parametro $time representa o momento que o usuário clica no botão
        $timeColumn = $this->getNextTime();//$this->getNextTime() vai dizer qual coluna vai usar a depender de qual ponoto irá bater e vai atribuir essa coluna a $timeColumn
        if(!$timeColumn) {//se nao estiver definido $timeColumn quer dizer que todos os batimentos foram executados e ai lançar exceção para mostrar msg
            throw new AppException("Você já fez os 4 batimentos do dia!");// lançando a classe de exceção criada em /exceptions/AppException.php
        }
        $this->$timeColumn = $time;//$this->$timeColumn quer dizer que quer pegar o atributo chamado timeColumn dentro do objeto atual(WorkingHours) e como queremos pegar o nome das colunas e podem variar por isso nesse caso tem q deixar o $ para dizer q esse valor altera
        if($this->id) {//caso ja tenha algum valor ele só ira atualizar as proximas colunas(time2, 3, 4..)
            $this->update();
        } else {//se nao houver valores ele fará uma inserção (time1)
            $this->insert();
        }
    }
}