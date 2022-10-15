<?php // Lembrar que o controller que é responsável por receber as requisições para ai sim ver se a necessidade de levar para o model ou para a voew
loadModel('Login');
session_start();
$exception = null;// garantindo que ao iniciar essa variavel esteja nula pois ela só será criada se cair no catch da excceção (linha 10)

if(count($_POST) > 0) {
    $login = new Login($_POST);// variavel login criando um novo objeto da classe Login
    try { 
        $user = $login->checkLogin(); // se tentar pegar o metodo/função checkLogin (criado em src\models\Login.php) e estiver setado ele vai retornar..
        // echo "Usuário {$user->name} logado";
        $_SESSION['user'] = $user;
        header("Location: day_records.php");
    } catch(AppException $e) { // pegando a classe de exceção criada em /exceptions/AppException.php
        $exception = $e; // aqui $exception está recebdno o valor da exceção (só reduziu nome para facilitar)
    }
}


loadView('login', $_POST + ['exception' => $exception]);// aqui além dos valores diponiveis em $_POST estamos adicionando(concatenando) um array de chave => valor q no caso é ['exception' => $exception]