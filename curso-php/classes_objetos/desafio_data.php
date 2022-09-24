<div class="titulo">Desafio Data</div>

<?php
class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar() {
        // return "{$this->dia}/{$this->mes}/{$this->ano}";

        $diaFormatado = sprintf('%02d', $this->dia);//irá transformar $this->dia em uma string que representa um número. Essa string terá tamanho 2 e será um número no formato decimal. 
        // Caso o número não possa ser convertido em uma string de duas casas (como é o caso de 1,2,3,4,etc.) um 0 será inserido na frente do número.
        $mesFormatado = sprintf('%02d', $this->mes);
        return "{$diaFormatado}/{$mesFormatado}/{$this->ano}";
    }
}

$aniversario = new Data;
$aniversario->dia = 9; // dando erro quando coloco o zero a frente do 9
$aniversario->mes = 2; // para funcionar usar como string
$aniversario->ano = 2014;
echo $aniversario->apresentar(), '<br>'; // USAR VIRGULA e nao concatenar com o ponto