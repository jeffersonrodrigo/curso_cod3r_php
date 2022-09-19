<div class="titulo">Desafio Palindromo</div>

<?php
function palindromo($palavra) {
    $ultimoIndice = strlen($palavra) - 1;// lembrando q o indice começa com zero entao tem q pegar o tamanho da palavra e subtrair por 1
    for($i = 0; $i <= $ultimoIndice; $i++) {
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {  // Se a palavra indice i(no caso começa com zero) for diferente da palavra $ultimoIndice - $i então...
            return 'Não';
        }
    }
    return 'Sim';
}

echo palindromo('arara') . ' ';
echo palindromo('ana') . ' ';
echo palindromo('abccba') . ' ';
echo palindromo('bola') . ' ';
echo '<br>';

function palindromoSimples($palavra) {
    return $palavra === strrev($palavra) ? 'Sim': 'Não'; // opereação ternária
}
//strrev -> função que traz a string revertida
echo palindromoSimples('arara') . ' ';
echo palindromoSimples('ana') . ' ';
echo palindromoSimples('abccba') . ' ';
echo palindromoSimples('bola') . ' ';
