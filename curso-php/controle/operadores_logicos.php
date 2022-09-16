<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p class='divisao'>V ou F</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true);// a exclamação é usado como negação lógica, sendo assim um valor verdadeiro passa a ser falso

echo "<p class='divisao'>Tabela verdade 'AND' (E)</p><hr>";
var_dump(true && true);// só sera verdadeiro se os dois forem verdadeiros
echo '<br>';
var_dump(true && false);
echo '<br>';
var_dump(false && true);
echo '<br>';
var_dump(false && false);
echo '<br>';
var_dump(true and true);
echo '<br>';
var_dump(true and false);
echo '<br>';
var_dump(false and true);
echo '<br>';
var_dump(false and false);
echo '<br>';
echo "<p class='divisao'>Tabela verdade 'OR' (OU)</p><hr>";
var_dump(true || true);
echo '<br>';
var_dump(true || false);
echo '<br>';
var_dump(false || true);
echo '<br>';
var_dump(false || false);// só será falso se as duas forem falsas
echo '<br>';
echo "<p class='divisao'>Tabela verdade 'XOR' (OU Exclusivo)</p><hr>";// só verdadeiro quando um é verdadeiro e outro é falso
var_dump(true xor true);// falso
echo '<br>';
var_dump(true xor false);//verdadeiro
echo '<br>';
var_dump(false xor true);//verdadeiro
echo '<br>';
var_dump(false xor false);// falso
echo '<br>';
var_dump(true != true);// falso
echo '<br>';
var_dump(true != false);//verdadeiro
echo '<br>';
var_dump(false != true);//verdadeiro
echo '<br>';
var_dump(false != false);// falso
echo '<br>';

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 65;
$sexo = 'M';

$pagouPrevidencia = true;
$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode se aposentar -> $podeSeAposentar.<br>";

if($idade >= 60 && $sexo === 'F') {
    echo "Pode se aposentar -> $sexo";
} elseif ($idade >= 65 && $sexo === 'M') {
    echo "Pode se aposentar -> $sexo";
} else {
    echo 'Vai ter que trabalhar mais um pouco...';
}