<?php

function getDateAsDateTime($date) { // verificação para saber se o q foi recebido foi uma string, se sim vai chamar o contrutor da classe dateTime, em caso contrario retorna a propria variavel $date
    return is_string($date) ? new DateTime($date) : $date;
}

function isWeekend($date) {//verificar se é final de semana
    $inputDate = getDateAsDateTime($date);
    return $inputDate->format('N') >= 6; //n passa o numero do dia e no caso sendo 6 ou 7 quer dizer q ele está no final de semana
}

function isBefore($date1, $date2) { //função para comparar se uma data é maior do que a outra
    $inputDate1 = getDateAsDateTime($date1);
    $inputDate2 = getDateAsDateTime($date2);
    return $inputDate1 <= $inputDate2; //retornar verdadeiro ou falso
}

function getNextDay($date) { //função para retornar o próximo dia
    $inputDate = getDateAsDateTime($date);
    $inputDate->modify('+1 day');
    return $inputDate;
}