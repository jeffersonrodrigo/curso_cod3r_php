<div class="titulo">Operações Aritméticas</div>

<?php
echo 1 + 1, '<br>';
var_dump(1 + 1);
echo '<br>';
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7, 4), '<br>'; // divisao por numeros inteiros, vai pegar somente o numero inteiro desconsiderando os decimais
echo round(7 / 4), '<br>'; // divisão com resultado de numero inteiro fazendo o arredondamento do resultado
echo 7 % 4, '<br>'; // módulo, resultado do resto de uma divisão
echo 7 % 2, '<br>';
echo 8 % 2, '<br>';
echo 4 ** 2, '<br>'; // Exponenciação
// echo 7 / 0, '<br>'; infinito

// Precedência de operadores:
// () => ** => / * % => + -
// primeiro parenteses => Exponenciação => divisão multiplicação e modulo => soma e subtração
echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2, '<br>';
?>