<?php
session_start();//iniciando sessao
requireValidSession();//requer sessao valida do usuário

loadModel('WorkingHours');//carrega a classe

$user = $_SESSION['user'];//pega o usuario da sessao e joga na variavel user
$records = WorkingHours::loadFromUserAndDate($user->id, date('Y-m-d'));

try {
    $currentTime = strftime('%H:%M:%S', time());//pegar hora atual

    if($_POST['forcedTime']) {
        $currentTime = $_POST['forcedTime'];
    }
    $records->innout($currentTime);
    addSuccessMsg('Ponto inserido com sucesso!');
} catch(AppException $e) {
    addErrorMsg($e->getMessage());
}

header('Location: day_records.php');