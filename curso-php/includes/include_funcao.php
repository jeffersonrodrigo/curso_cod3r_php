<div class="titulo">Includes Funções</div>

<?php
echo 'Carregando: include_funcao<br>';

function carregarArquivo() {
    include('include_arquivo.php');

    echo $variavel . '<br>';
    echo soma(2, 5) . '!<br>';
}

echo 'Novamente no arquivo include_funcao<br>';
// echo soma(1, 8) . '<br>';
carregarArquivo();

echo "Variável = '{$variavel}'.<br>"; // não é possivel acessar a variavel fora da função

echo soma(1, 8) . '<br>'; // mas consegue chamar a função soma após chamar a funcção carregar arquivo