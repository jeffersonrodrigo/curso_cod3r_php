<div class="titulo">Recursividade</div>

<?php
function somaUmAte($numero) {
    $soma = 0;
    for($i; $i <= $numero; $i++) {
        $soma += $i;
    }
    return $soma;
}

echo somaUmAte(10) . '<br>';

function somaRecursivaUmAte($numero) {
    //Condição de parada
    if($numero === 1 ) {
        return 1;
    }
    return $numero + somaRecursivaUmAte($numero - 1);
}

echo somaRecursivaUmAte(10) . '<br>';