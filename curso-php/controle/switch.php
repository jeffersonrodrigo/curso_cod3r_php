<div class="titulo">Switch</div>

<?php
$categoria = 'luxo';
$preco = 0.0;
$carro = '';

if($categoria === 'luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} else if ($categoria === 'SUV') {
    $carro = 'Renegade';
    $preco = 80000;
} else if ($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = 55000;
} else {
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";

$categoria ='???';
switch(strtolower($categoria)){
    case 'luxo':{
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    } // pode ou não usar as chaves no caso das cases
    case 'suv':
    case 'suv Básico':
        $carro = 'Renegade';
        $preco = 80000;
        break;
    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'Mobi';
        $preco = 33000;
        break; // o último break não é obrigatório
    }

    $precoFormatado = number_format($preco, 2, ',', '.');
    echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";