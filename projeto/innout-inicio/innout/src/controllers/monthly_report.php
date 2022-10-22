<?php
session_start();
requireValidSession();
$currentDate = new DateTime();// pegar hora atual

$user = $_SESSION['user'];

try {
    $registries = WorkingHours::getMonthlyReport($user->id, $currentDate);
} catch(Error $e) {
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
}
try {
    $lastDay = getLastDayOfMonth($currentDate)->format('d');
} catch(Error $e) {
    echo 'Erro 2 encontrado: ' . $e->getMessage() . '<br>';
}
// die();


$registries = WorkingHours::getMonthlyReport($user->id, $currentDate);
//gerando erro
echo 'teste';
$report = [];// aqui que vamos inserir o relatório que será enviado pra view
$workDay = 0;//essa variavel representa um contador que vai definir quais sao os dias comerciais do mês, sem levar em consideração feriados
$sumOfWorkedTime = 0;// somar as horas trabalhadas no mes
$lastDay = getLastDayOfMonth($currentDate)->format('d');//pegar ultimo dia do mês
echo 'teste';

for($day = 1; $day <= $lastDay; $day++) {
    $date = $currentDate->format('Y-m') . '-' . sprintf('%02d', $day);
    $registry = $registries[$date];

    if(isPastWorkeday($date)) $workday++;

    if($registry) {
        $sumOfWorkedTime += $registry->worked_time;
        array_push($report, $registry);
    } else {
        array_push($report, new WorkingHours([
            'work_date' => $date,
            'worked_time' => 0
        ]));
    }
}

$expectedTime = $workDay * DAILY_TIME;
$balance = getTimeStringFromSeconds(abs($sumOfWorkedTime - $expectedTime));
$sign = ($sumOfWorkedTime >= $expectedTime) ? '+' : '-';

loadTemplateView('monthly_report', [
    'report' => $report,
    'sumOfWorkedTime' => $sumOfWorkedTime,
    'balance' => "{$sign}{$balance}"
]);