<div class="titulo">Closure & Callable</div>

<?php
$soma1 = function($a, $b) {
    return $a + $b;
}; // esse tipo de estrutura é um Callable - Algo que pode ser chamado

function soma2($a, $b) {
    return $a + $b;
};

echo $soma1(2, 3) . ' ';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>'; // is_callable - diz se é um callable ou nao

echo soma2(2, 3) . ' ';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';