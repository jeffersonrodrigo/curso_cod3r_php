<div class="titulo">Básico Array</div>

<?php
$lista = array(1, 2, 3.4, "texto");
echo $lista . '<br>'; //só vai mostrar q é um array
var_dump($lista);
echo '<br>';
print_r($lista); // melhor forma de imprimir

echo '<br>' . $lista[0];// forma de acessar um elemento num array
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];

$texto = 'Esse é um texto de teste';
echo '<br>' . $texto[11]; //cuidado o acento nesse caso conta dois
echo '<br>' . mb_substr($texto, 10, 1);