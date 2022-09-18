<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "José",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dados2["endereço"] = "Rua A"; // adicionando valor ao array

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>';
$indice = array_rand($dadosCompletos); // pega um valor de forma randomica do array
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}"; // Para pegar um indice de um array deve-se colocar entre chaves
echo "<br> ${dadosCompletos['idade']}";

//retirar valor do array -> função unset
unset($dadosCompletos["nome"]);
echo '<br>';
print_r($dadosCompletos);

unset($dadosCompletos);
echo '<br>';
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares; // em soma de arrays em caso de mesmos indices ele irá priorizar o array q estiver mais a esquerda (nesse exemplo o $pares)
echo '<br>';
print_r($decimais);

// Ao invés de somar os arrays é mais "seguro" chamar a função merge para unir os dois sem problema de perda
$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais); // nesse caso não está ordenado irá apresentar primeiro os pares e depois os impares

// para ordenar os arrays chamar função sort -> MODIFICA o array o organizando
sort($decimais);
echo '<br>';
print_r($decimais);