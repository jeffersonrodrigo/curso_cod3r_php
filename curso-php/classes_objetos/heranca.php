<div class="titulo">Herança</div>

<?php
class Pessoa {
    public $nome;// encapsulamento está publico
    public $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome; // usa o $this para acessar o atributo do objeto e relacionar ao parametro
        $this->idade = $idade;
        echo 'Pessoa criada! <br>';
    }

    function __destruct() {
        echo 'Pessoa diz: Tchau!';
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos <br>";
    }
}

class Usuario extends Pessoa { // extends está referenciando de Pessoa, no caso estamos dizendo q a classe Usuario é uma subclasse da superclasse Pessoa
    public $login; // além dos atributos de pessoa terá atributos a mais

    function __construct($nome, $idade, $login) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->login = $login;
        echo 'Usuário criado! <br>';
    }

    function __destruct() {
        echo 'Usuário diz: Tchau!<br>';
        parent::__destruct();
    }

    public function apresentar() {
        // echo "@{$this->login}: {$this->nome}, {$this->idade} anos<br>"; // aqui está sobrescrevendo da classe pai
        echo "@{$this->login}: ";
        parent::apresentar(); // aqui esta chamando a função apresentar como ja vem da classe Pessoa
    }
}

$usuario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
$usuario->apresentar();
unset($usuario);