<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = ['laranja', 'abacaxi'];
// FRUTAS[0] = 'banana'; -> não é possivel alterar o valor de uma constante 
// FRUTAS[] = 'banana'; - >também não é possivel adicionar itens a arrays contantes
print_r(FRUTAS);

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"]; // passando valores aos indices
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));