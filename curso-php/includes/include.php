<div class="titulo">Includes</div>

<?php
echo ' Executei essa linha do arquivo include<br>';
include('include_arquivo.php'); // acessando arquivo

echo soma(3, 8) . '<br>';
echo "tentar imprimir os parametros::: O resultado da soma '${a}' + '{$b}' é: " . soma(3, 8) . '<br>';
# como fazer para exibir os valores dos parametros
echo "O conteúdo da variável é '{$variavel}'.";