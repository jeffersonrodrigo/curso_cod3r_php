<div class="titulo">Laço for</div>

<?php
// 3 partes do for: 1° voce cria uma variável 2° voce tem uma expressão 3°definir algum tipo de modificação da variável 
// essas 3 partes são divididas por ponto vírgula
for($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}

echo '<hr>';

for(; $cont <= 10; $cont++) {
    echo "$cont <br>";
}

echo '<hr>';

for(; $cont <=15;) {
    echo "$cont <br>"; // se nao acrescentar nada ficara rodando num loop infinito
    $cont++;
}

echo '<hr>';
$array = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
print_r($array);
echo '<br><hr>';
for($i = 0; $i < count($array); $i++) {
    echo "$array[$i]<br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

echo '<br><hr>';
for($i = 0; $i < count($matrix); $i++) {
    for($j = 0; $j < count($matrix[$i]); $j++) {
        echo "{$matrix[$i][$j]}<br>"; // importante interpolar usando chaves
    }
}