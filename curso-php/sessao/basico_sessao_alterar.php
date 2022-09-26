<?php
session_start();
print_r($_SESSION);
?>

<?php
$_SESSION['email'] = 'gabrielfilhoalterado@emailaz.com.br'; // altera o email no array da sessão
?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome'] ?><br>
    <b>Email: </b> <?= $_SESSION['email']// Lembrar pra usar php numa linha usar o simbolo de igual ?>
</p>


<p>
    <a href="basico_sessao.php">Voltar</a>
</p>
<p>
    <a href="basico_sessao_limpar.php">Limpar sessão</a>
</p>