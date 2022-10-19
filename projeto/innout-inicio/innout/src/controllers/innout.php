<?php
session_start();//iniciando sessao
requireValidSession();//requer sessao valida do usuário

loadModel('WorkingHours');//carrega a classe

$user = $_SESSION['user'];//pega o usuario da sessao e joga na variavel user
$records = WorkingHours::loadFromUserAndDate($user->id, date('Y-m-d'));

$currentTime = strftime('%H:%M:%S', time());//pegar hora atual
$records->innout($currentTime);
header('Location: day_records.php');