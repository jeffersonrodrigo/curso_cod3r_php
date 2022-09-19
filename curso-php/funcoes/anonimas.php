<div class="titulo">Funções Anônimas</div>

<?php
$soma = function ($a, $b) {
    return $a + $b;
};
echo $soma(1, 2);

// função dentro da função
//aqui criamos a função executar q tera como um de seus parametros uma função
function executar($a, $b, $op, $funcao) {
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}

executar(2, 3, '+', $soma);

$multiplicacao = function ($a, $b) {
    return $a * $b;
};

$divisao = function ($a, $b) {
    return $a / $b;
};

executar(2, 3, '*', $multiplicacao);
executar(2, 3, '/', $divisao);