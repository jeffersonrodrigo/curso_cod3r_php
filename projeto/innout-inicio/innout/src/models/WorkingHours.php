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

    public static function loadFromUserAndDate($userId, $workDate) {
        //esse metodo vai tentar pegar do banco registro, caso ele consiga  ele retorna registro, caso contrario ele vai criar uma nova instância colocando user_id, dia de trabalho e worked_time
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

    public function getNextTime() {
        //função para pegar proximo time (batimento)
        if(!$this->time1) return 'time1';
        //basicamente irá ver se o time1 ja esta preenchido, se nao estiver vai o preencher, se estiver vai para o proximo
        if(!$this->time2) return 'time2';
        if(!$this->time3) return 'time3';
        if(!$this->time4) return 'time4';
        return null;
        //caso todos ja estejam preenchidos retorna nulo, para dizer q nao existe mais nenhum batimento que precisa ser feito naquele dia
    }

    public function getActiveClock() {
        //função para determinar qual dos dois relogios estara ativos
        $nextTime = $this->getNextTime();
        if($nextTime === 'time1' || $nextTime === 'time3') {
            //se o da entrada ou segunda entrada for o último a se batido entao estara andando o relógio do trabalho
            return 'exitTime';
        } elseif($nextTime === 'time2' || $nextTime === 'time4') {
            return 'workedInterval';
        } else {
            return null;
        }
    }

    public function innout($time) {
        //função "Bater o ponto" #parametro $time representa o momento que o usuário clica no botão
        $timeColumn = $this->getNextTime();
        //$this->getNextTime() vai dizer qual coluna vai usar a depender de qual ponoto irá bater e vai atribuir essa coluna a $timeColumn
        if(!$timeColumn) {
            //se nao estiver definido $timeColumn quer dizer que todos os batimentos foram executados e ai lançar exceção para mostrar msg
            throw new AppException("Você já fez os 4 batimentos do dia!");
            // lançando a classe de exceção criada em /exceptions/AppException.php
        }
        $this->$timeColumn = $time;//$this->$timeColumn quer dizer que quer pegar o atributo chamado timeColumn dentro do objeto atual(WorkingHours) e como queremos pegar o nome das colunas e podem variar por isso nesse caso tem q deixar o $ para dizer q esse valor altera
        $this->worked_time = getSecondsFromDateinterval($this->getWorkedInterval());
        if($this->id) {
            //caso ja tenha algum valor ele só ira atualizar as proximas colunas(time2, 3, 4..)
            $this->update();
        } else {
            //se nao houver valores ele fará uma inserção (time1)
            $this->insert();
        }
    }

    function getWorkedInterval() {
        //função para pegar o intervalo de tempo TRABALHADO e retornar um objeto
        [$t1, $t2, $t3, $t4] = $this->getTimes();

        $part1 = new DateInterval('PT0S');
        //estabelecendo q no momento o valor dos intervalos é zero segundo
        $part2 = new DateInterval('PT0S');

        if($t1) $part1 = $t1->diff(new DateTime());
        //pega a diferença entre a hr atual e a hora em que o primeiro ponto foi batido
        if($t2) $part1 = $t1->diff($t2);
        //diferença entre o batimento do segundo ponto e do primeiro ponto
        if($t3) $part2 = $t3->diff(new DateTime());
        if($t4) $part2 = $t3->diff($t4);

        return sumIntervals($part1, $part2);
        //função criada em: src\config\date_utils.php
    }

    function getLunchInterval() {
        //pegar tempo de intervalo
        [, $t2, $t3,] = $this->getTimes();
        //pegar apenas o segundo e terceiro parametro
        $lunchInterval = new DateInterval('PT0S');

        if($t2) $lunchInterval = $t2->diff(new DateTime());
        if($t3) $lunchInterval = $t2->diff($t3);

        return $lunchInterval;
    }

    function getExitTime() {
        [$t1,,, $t4] = $this->getTimes();
        // $workday = new DateInterval('PT8H'); # as duas formas são válidas
        $workday = DateInterval::createFromDateString('8 hours');

        if(!$t1) {
            return (new DateTimeImmutable())->add($workday);
        } elseif($t4) {
            return $t4;
        } else {
            $total = sumIntervals($workday, $this->getLunchInterval());
            return $t1->add($total);
        }
    }

    public static function getMonthlyReport($userId, $date) {
        //metodo pegar relatorio do mes
        $registries = [];
        // é nessa variavel que vamos inserir os registros obtidos no banco de dados através da consulta
        $startDate = getFirstDayOfMonth($date)->format('Y-m-d');
        $endDate = getLastDayOfMonth($date)->format('Y-m-d');

        $result = static::getResultSetFromSelect([
            //criado linha 51 em src\models\Model.php
            'user_id' => $userId,
            'raw' => "work_date between '{$startDate}' AND '{$endDate}'"
             //trecho "cru" de SQL para fazer consulta
        ]);

        if($result) {
            //se o result estiver setado vai entrar aqui e fazer um laço para pegar cada um dos resultados e colocar dentro de $registries
            while($row = $result->fetch_assoc()) {
                $registries[$row['work_date']] = new WorkingHours($row);
            }
        }

        return $registries;
    }
    
    private function getTimes() {
        $times = [];
    
        $this->time1 ? array_push($times, getDateFromString($this->time1)) : array_push($times, null);
        $this->time2 ? array_push($times, getDateFromString($this->time2)) : array_push($times, null);
        $this->time3 ? array_push($times, getDateFromString($this->time3)) : array_push($times, null);
        $this->time4 ? array_push($times, getDateFromString($this->time4)) : array_push($times, null);
    
        return $times; 
    }
}