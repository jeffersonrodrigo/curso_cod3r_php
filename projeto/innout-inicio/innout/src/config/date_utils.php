<?php

function getDateAsDateTime($date) {
     // verificação para saber se o q foi recebido foi uma string, se sim vai chamar o contrutor da classe dateTime, em caso contrario retorna a propria variavel $date
    return is_string($date) ? new DateTime($date) : $date;
}

function isWeekend($date) {
    //verificar se é final de semana
    $inputDate = getDateAsDateTime($date);
    return $inputDate->format('N') >= 6;
     //n passa o numero do dia e no caso sendo 6 ou 7 quer dizer q ele está no final de semana
}

function isBefore($date1, $date2) {
     //função para comparar se uma data é maior do que a outra
    $inputDate1 = getDateAsDateTime($date1);
    $inputDate2 = getDateAsDateTime($date2);
    return $inputDate1 <= $inputDate2;
     //retornar verdadeiro ou falso
}

function getNextDay($date) {
     //função para retornar o próximo dia
    $inputDate = getDateAsDateTime($date);
    $inputDate->modify('+1 day');
    return $inputDate;
}

function sumIntervals($interval1, $interval2) {
    $date = new DateTime('00:00:00');
    $date->add($interval1);
    $date->add($interval2);
    return (new DateTime('00:00:00'))->diff($date);
}

function subtractIntervals($interval1, $interval2) {
    $date = new DateTime('00:00:00');
    $date->add($interval1);
    $date->sub($interval2);
    return (new DateTime('00:00:00'))->diff($date);
}

function getDateFromInterval($interval) {
    return new DateTimeImmutable($interval->format('%H:%i:%s'));
}

function getDateFromString($str) {
    return DateTimeImmutable::createFromFormat('H:i:s', $str);
}

function getFirstDayOfMonth($date) {
    //primeiro dia do mes
    $time = getDateAsDateTime($date)->getTimestamp();
    return new DateTime(date('Y-m-1', $time));
}

function getLastDayOfMonth($date) {
    //ultimo dia do mes
    $time = getDateAsDateTime($date)->getTimestamp();
    return new DateTime(date('Y-m-t', $time));
}

function getSecondsFromDateInterval($interval) {
    $d1 = new DateTimeImmutable();
    $d2 = $d1->add($interval);
    return $d2->getTimestamp() - $d1->getTimestamp();
}

function isPastWorkday($date) {
    //função que diz se é um dia válido de trabalho que já passou = retorna verdadeiro ou falso
    return !isWeekend($date) && isBefore($date, new DateTime());
    //isWeekend função criada linha 8 e isBefore linha 15
}

function getTimeStringFromSeconds($seconds) {
    //pegar os segundos e transformar formato h m s//$report = data que passamos como parametro para essa view, e pegar cada um dos registros dentro do relatório para preencher as informações
    $h = intdiv($seconds, 3600);
    $m = intdiv($seconds % 3600, 60);
    $s = $seconds - ($h * 3600) - ($m * 60);
    return sprintf('%02d:%02d:%02d', $h, $m, $s);
}

function formatDateWithLocale($date, $pattern) {
     //$pattern = padronizar
    $time = getDateAsDateTime($date)->getTimestamp();
    return strftime($pattern, $time);
}