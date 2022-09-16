<div class="titulo">Interpolação</div>

<?php
$numero = 10;
echo $numero;
echo '<br> $numero'; // aspas simples nao resolve interpolação
echo "<br> $numero";// aspas duplas resolve interpolação

$texto = "A sua nota é: $numero";
echo "<br> $texto";

$objeto = 'caneta';
echo "<br> Eu tenho 5 $objetos";
echo "<br> Eu tenho 5 {$objeto}s.";
echo "<br> Eu tinha 5 { $objeto}s mas perdi 3 {$objeto }s."; // espaço na frente da chave da erro