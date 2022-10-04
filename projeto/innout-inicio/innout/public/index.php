<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/user.php');

$user = new User(['name' => 'Lucas', 'email' => 'lucas@cod3r.com.br']);
// echo $user->getSelect();

echo User::getSelect(['id' => 1], 'name, email');
echo '<br>';
echo User::getSelect(['name' => 'Chaves', 'email' => 'chaves@cod3r.com.br']);