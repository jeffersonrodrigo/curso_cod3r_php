<?php
session_start();
requireValidSession();

$currentDate = new DateTime();
// pegar hora atual

$user = $_SESSION['user'];
$selectedUserId = $user->id;
$users = null;
if($user->is_admin) {
    $users = User::get();
    $selectedUserId = $_POST['user'] ? $_POST['user'] : $user->id;
}

$selectedPeriod = $_POST['period'] ? $_POST['period'] : $currentDate->format('Y-m');
$periods = [];
for($yearDiff = 0; $yearDiff <= 2; $yearDiff++) {
    $year = date('Y') - $yearDiff;
    for($month = 12; $month >= 1; $month--) {
        $date = new DateTime("{$year}-{$month}-1");
        $periods[$date->format('Y-m')] = strftime('%B de %Y', $date->getTimestamp());
    }
}

$registries = WorkingHours::getMonthlyReport($selectedUserId, $selectedPeriod);

$report = [];
// aqui que vamos inserir o relatório que será enviado pra view
$workDay = 0;
//essa variavel representa um contador que vai definir quais sao os dias comerciais do mês, sem levar em consideração feriados
$sumOfWorkedTime = 0;
// somar as horas trabalhadas no mes
$lastDay = getLastDayOfMonth($selectedPeriod)->format('d');
//pegar ultimo dia do mês para que possa fazer laço for

for($day = 1; $day <= $lastDay; $day++) {
    //dia começa no 1; dia menor ou igual que o dia pego através da variavel lastDay; incrementa +1; pecorrendo assim em todos os dias do mes
    $date = $selectedPeriod . '-' . sprintf('%02d', $day);
    //sprintf('%02d', $day);colocar zero na frente
    $registry = $registries[$date];

    if(isPastWorkday($date)) $workDay++;
    #se não é final de semana e está no passado, significa que a variável workDay precisará ser incrementada //função criada em src\config\date_utils.php linha 70

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
    'sumOfWorkedTime' => getTimeStringFromSeconds($sumOfWorkedTime),
    'balance' => "{$sign}{$balance}",
    'selectedPeriod' => $selectedPeriod,
    'periods' => $periods,
    'selectedUserId' => $selectedUserId,
    'users' => $users,
]);