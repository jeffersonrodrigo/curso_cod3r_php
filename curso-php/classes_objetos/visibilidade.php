<div class="titulo">Visibilidade</div>

<!-- Aula focada em modificadores de acesso -->
<?php
class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado'; // só o q consegue acessar ao atributo privado são funções da própria classe

    public function mostrarA() {
        echo "Class A) Público = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
    }

    protected function vaiPorHeranca() {
        echo 'Serei transmitido por herança!<br>';
    }

    private function naoMostrar() {
        echo "Não vou imprimir";
    }
}

$a = new A();
$a->mostrarA();
// $a->naoMostrar();

class B extends A {
    public function MostrarB() {
        echo "Class B) Público = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";// valor será exibido pois a classe B é subclasse da classe A
        echo "Class B) Privado = {$this->privado}<br>"; // valor nao será exibido pois pertence apenas a classe q foi criada

        parent::vaiPorHeranca();
    }
}
echo '<br>';
$b = new B();
$b->mostrarB();