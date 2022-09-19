<div class="titulo">Função & Escopo</div>
<!-- 
    - function - palavra reservada em php para criar uma função
    - definir o nome da função
    - parenteses
    - depois corpo da função

Conceito de função → é você ter uma sequência de códigos, ou seja, um algoritmo(uma sequência de passos) e você dar um nome a essa sequência de passos de tal forma 
que você consiga chamar essa sequência e reutilizar código que é o grande objetivo das funções.
 -->
<?php
function imprimirMensagens() {
    echo "Olá! ";
    echo "Até a próxima! <br>";
}

imprimirMensagens(); // forma de chamar a função
imprimirMensagens();// pode repetir várias vezes já que a ideia é reuzo de código
imprimirMensagens();

//Lembre-se: Criar uma função é diferente de invocar ela

$variavel = 1;

function trocaValor() {
    $variavel = 2; //O escopo da variavel da função fica apenas nela
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor(); //Escopo apenas na função, endereço de memória diferente da variavel criada na linha 23
echo "Depois: $variavel <br>";

// palavra global é que diz ao php que voce quer afetar o escopo de forma mais abrangente
function trocaValorDeVerdade () {
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}
echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";

var_dump(trocaValorDeVerdade());