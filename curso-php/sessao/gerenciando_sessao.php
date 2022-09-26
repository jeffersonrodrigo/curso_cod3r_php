<div class="titulo">Gerenciando Sessão</div>

<?php
session_start();
echo session_id();

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo '<br>' . $_SESSION['contador'];

if($_SESSION['contador'] % 5 === 0) {// assim a cada 5 refrehs gera novo id para a pagina, se usar o 2 ai a cada 2 paginas reseta o id
    session_regenerate_id(); // responsavel por regenerar o ID da sessão
}

if($_SESSION['contador'] >= 15) {
    session_destroy();
}