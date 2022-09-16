<div class="titulo">Atribuições</div>

<?php
$title = 'Atribuições';

$numero = 10;
echo '<br>' . $numero;
$numero = $numero -3;
echo '<br>' . $numero;
$numero = $numero + 1.5;
echo '<br>' . $numero;
echo '<br>' . $numero--; // Aqui ao imprimir o valor ainda não mostrará com o decremento já que o echo mostrou a variavel ANTES de decrementar, se ver a variavel depois verá que ocorreu sim o decremento
echo '<br>' . $numero;
echo '<br>' . --$numero; //decremento executado antes de se mostrar a variável
echo '<br>' . $numero;
echo '<br>' . $numero++;
echo '<br>' . $numero;
echo '<br>' . ++$numero;

$numero = 20;
echo '<br>' . $numero;
$numero -= 5; // atribuição subtrativa
echo '<br>' . $numero;
$numero += 5; // atribuição aditiva
echo '<br>' . $numero;
$numero *= 10; // atribuição multiplicativa
echo '<br>' . $numero;
$numero /= 2; // atribuição divisiva
echo '<br>' . $numero;
$numero %= 6; // atribuição modular
echo '<br>' . $numero;
$numero **= 4; // atribuição potencial
echo '<br>' . $numero;
$numero .= 4; // concatenação
echo '<br>' . $numero;

$texto = 'Esse é um texto';
echo '<br>' . $texto;
$texto = $texto . ' qualquer';
echo '<br>' . $texto;
$texto .= ' de verdade!';
echo '<br>' . $texto;