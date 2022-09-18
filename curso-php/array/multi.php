<div class="titulo">Multidimensionais</div> 

<?php 
// arrays dentro de arrays
$dados = [
    [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia"
    ],
    "pessoa3" => [ // assim está associando essa pessoa a esse indice
        "nome" => "João",
        "idade" => 45,
        "naturalidade" => "Brasilia"
    ]
];

print_r($dados);
echo '<br>' . $dados[0]['idade']; // aqui está pegando o dado dentro do array dados no valor de indice zero (o do roberto) o valor com nome idade
echo '<br>' . $dados[1]['idade'];

$dados [] = [
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do México"
]; // forma de adicionar um valor ao array

echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['idade'];

$dados[2]["vizinho"] = "Chaves"; // forma de adicionar apenas um atributo a um array específico
echo '<br>';
print_r($dados[2]); // imprimir apenas o valor do array de indice 2

unset($dados[1]); // retira apenas o array de indice 1, os outros permanecem como estão
echo '<br>';
print_r($dados);