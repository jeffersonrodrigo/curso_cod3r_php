<div class="titulo">Mapa</div>

<?php
$dados = array( 
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
); // aqui estamos definindo as chaves para o array, no caso nao poderemos depois acessar os valores dele atraves de indices 0, 1, 2 , 3....

print_r($dados);

var_dump($dados[0]);

echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];