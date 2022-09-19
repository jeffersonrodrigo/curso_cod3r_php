<div class="titulo">Usando Tipos</div>

<?php
function somar1($a, $b) {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar1(1, 2) . '<br>';
echo somar1(1.7, 2.5) . '<br>';
echo somar1(1, '4dois') . '<br>';

function somar2(int $a, int $b) { // aqui passamos q o valor é INTEIRO
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar2(1, 2) . '<br>';
echo somar2(1.7, 2.5) . '<br>'; // valores do tipo float
// echo somar2(1, '4dois') . '<br>'; // mistura numero com string

function somar3($a, $b): int { // aqui define que o tipo de retorno é inteiro, logo irá fazer operações com float mas o resultado será int
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}
echo somar3(1, 2) . '<br>';
echo somar3(1.7, 2.5) . '<br>';
echo somar3(1, '4dois') . '<br>';