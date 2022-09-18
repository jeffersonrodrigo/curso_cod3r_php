<div class="titulo">Comparação Arrays</div>

<?php
$arr1 = ['nome' => 'Maria', 'idade' => 20];
$arr2 = ['nome' => 'Maria', 'idade' => 20];
var_dump($arr1 == $arr2);
echo '<br>';
var_dump($arr1 === $arr2);

echo '<br>';
$arr3 = [ 'idade' => 20, 'nome' =>'Maria'];
echo '<br>';
var_dump($arr1 == $arr3); //nessa comparação veles serão iguais pois a ordem nao influenciara
echo '<br>';
var_dump($arr1 === $arr3); // aqui ja dara falso pq a ordem vai influenciar

echo '<br>';
echo '<br>';
$arr4 = [ 'idade' => '20', 'nome' =>'Maria'];
var_dump($arr1 == $arr4);