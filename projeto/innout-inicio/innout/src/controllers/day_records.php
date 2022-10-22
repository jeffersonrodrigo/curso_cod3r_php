<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
session_start();
requireValidSession();

$date = (new Datetime())->getTimestamp();
$today = strftime('%d de %B de %Y', $date);
//$records seriam os registros dos usuários
loadTemplateView('day_records', ['today' => $today]);