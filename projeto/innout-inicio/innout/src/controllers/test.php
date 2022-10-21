<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
//Controller temporário!!!
loadModel('WorkingHours');

$wh = WorkingHours::loadFromUserAndDate(1, date('Y-m-d'));
echo '<br>';