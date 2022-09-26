<div class="titulo">Básico Sessão</div>

<?php
session_start();// quando for usar sessão usar o comando já no inicio do arquivo

print_r($_SESSION); //Para acessar o array associado a sessão
echo "<br>";

if(!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Gabriel';
}

if(!$_SESSION['email']) {
    $_SESSION['email'] = 'gabriel@azmail.com';
}

print_r($_SESSION);

?>

<p>
    <a href="/sessao/basico_sessao_alterar.php">Alterar Sessão</a>
</p>