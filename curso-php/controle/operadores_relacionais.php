<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1);
echo '<br>';
var_dump(1 > 1);
echo '<br>';
var_dump(1 >= 1);
echo '<br>';
var_dump(4 < 23);
echo '<br>';
var_dump(1 <= 7);
echo '<br>';
var_dump(1 != 1);
echo '<br>';
var_dump(1 <> 1);
echo '<br>';
echo '<br>';

var_dump(111 == '111');
echo '<br>';
var_dump(111 === '111');
echo '<br>';
var_dump(111 != '111');
echo '<br>';
var_dump(111 !== '111');
echo '<br>';

echo "<p>Relacionais no If/Else</p><hr>";
$idade = 70;
if($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} else if($idade < 65) {
    echo "Adulto = $idade anos<br>";
} else{
    echo "Terceira idade = $idade anos!<br>";
}

echo "<p>Spaceship</p><hr>";
var_dump(500 <=> 3); // Se o primeiro for maior que o segundo irá retornar um valor inteiro [int(1)]
var_dump(50 <=> 50); // Se os dois forem iguais vai retornar zero [int(0)]
var_dump(5 <=> 50); // Se o segundo for maior que o primeiro irá retornar um valor negativo [int(-1)]
?>

<style>
    p {
        margin-bottom: 0px;
    }

    hr {
        margin-top: 0px;
    }
</style>