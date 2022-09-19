<div class="titulo">Argumentos Variáveis</div>

<?php
function soma($a, $b) {
    return $a + $b;
}

echo soma(14, 15) . '<br>';
echo soma(6, 5, 4) . '<br>'; //só vai retornar os 2 primeiros parametros

function somaCompleta(...$numeros) {
    $soma = 0;
    foreach($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1, 2, 3, 4, 5,);

$array = [6, 7, 8];
echo '<br>' . somaCompleta(...$array);

function membros($titular, ...$dependentes) { // a partir do segundo parametro tudo o q for passado estará dentro do array de dependentes
    echo "Titular: $titular <br>";
    if($dependentes) {
        foreach($dependentes as $dep) {
            echo "Dependente: $dep <br>";
        }
    }
}

echo '<br>';
membros("Ana Silva", "Pedro", "Rafaela", "Amanda");