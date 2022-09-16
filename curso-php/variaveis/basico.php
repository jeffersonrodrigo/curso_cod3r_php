<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3; //forma de atribuir uma informação a uma variável
$b = 16;
$soma = $a + $b;
echo $soma;


echo '<br>';
echo isset($soma);
echo '<br>';

unset($soma);
echo '<br>';
var_dump($soma);

echo '<br>';
$variavel = 10;
echo '<br>' . $variavel;
$variavel = "Agora sou uma string!";
echo '<br>' . $variavel;

// Nomes de variável - IMPORTANTE TER PADRONIZAÇÃO
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr = 'valida'; // nenhum pouco aconselhado
// $6var = 'invalida';
// $%var7 = 'invalida';
// $var8% = 'invalida';
?>
<h3>Variáveis pré-definidas PHP</h3>
<a href="https://www.php.net/manual/pt_BR/reserved.variables.php" target="_blank";>Ver documentação PHP</a>
