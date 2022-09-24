<div class="titulo">Desafio Erros</div>

<?php
interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template { // extends ao inves de implements
    public function metodo3() {
        echo "Estou funcionando";
    }
}

class Classe extends ClasseAbstrata { //erro implements ao invés de extends
    function __construct($parametro) {

    }

    function metodo1() { // tem q chamar pq foi definido na interface

    }
    public function metodo2($parametro) { // tem q chamar pq foi definido na interface

    }
}

$exemplo = new Classe('...');//faltou o new # faltou passar o parametro
$exemplo->metodo3(); //usou ponto ao inves da seta