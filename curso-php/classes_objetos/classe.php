<div class="titulo">Primeira Classe</div>

<?php
class Cliente {
    // atributos
    public $nome = 'Anônimo'; //public é um modificador de visibilidade
    public $idade = 18;
    //função ou métodos
    public function apresentar() {
        return "Nome: {$this->nome} Idade: {$this->idade}"; // o $this aponta para o objeto/intancia atual
    }
}

$c1 = new Cliente(); // new palavra especial para criar um objeto a partir de uma classe
$c1->nome = 'Ana Silva';
$c1->idade = 27;
echo $c1->apresentar() . '<br>'; // a seta (->) é que faz com que consiga acessar um método do objeto

$c2 = new Cliente;
$c2->nome = 'Gabriel';
$c2->idade = 43;
echo$c2->apresentar() . '<br>';;

echo $c1->nome;