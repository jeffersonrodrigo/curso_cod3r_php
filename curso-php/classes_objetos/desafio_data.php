<div class="titulo">Desafio Data</div>

<?php
class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar() {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$aniversario = new Data;
$aniversario->dia = 9; // dando erro quando coloco o zero a frente do 9
$aniversario->mes = '02'; // para funcionar usar como string
$aniversario->ano = 2014;
echo $aniversario->apresentar(), '<br>'; // USAR VIRGULA e nao concatenar com o ponto