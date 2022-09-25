<div class="titulo">Include vs Require</div>

<?php
ini_set('display_errors', 1);

echo 'Usando include com arquivo inexistente...<br>';
include('arquivo_inexistante.php'); // include com erro vai continuar renderizando o arquivo o q pode fazer com q demore a ver que tenha algo errado

echo 'Usando require com arquivo inexistente...<br>';
require('arquivo_inexistente.php');// require gera um erro fatal não deixando renderizar após ele

echo 'Não achou mesmo... <br>';