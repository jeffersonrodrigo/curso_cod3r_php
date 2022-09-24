<div class="titulo">Interface</div>

<?php
interface Animal {
    function respirar();
}

interface Canino {
    function latir(): string;
}
// com o uso do implements q é semelhante ao extends aqui cachorro fica obrigado a ter a função respirar que vem de Animal
class Cachorro implements Animal, Canino {
    function respirar(){
        return "Irei usar ar";
    }

    function latir(): string {
        return 'au au';
    }
}

$animal1 = new Cachorro();
echo $animal1->respirar() . '<br>';
echo $animal1->latir() . '<br>';

echo '<br>';
var_dump($animal1);
echo '<br>';

var_dump($animal1 instanceof Cachorro);
var_dump($animal1 instanceof Canino);
var_dump($animal1 instanceof Animal);