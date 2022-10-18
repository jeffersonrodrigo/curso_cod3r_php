<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
session_start();
requireValidSession();

loadModel('WorkingHours');

$date = (new Datetime())->getTimestamp();
$today = strftime('%d de %B de %Y', $date);

$user = $_SESSION['user'];
$records = WorkingHours::loadFromUserAndDate($user->id, date('Y-m-d'));
//$records seriam os registros dos usuários
loadTemplateView('day_records', [
    'today' => $today,
    'records' => $records
]);