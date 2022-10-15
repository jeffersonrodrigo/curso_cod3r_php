<?php

class ValidationException extends AppException { // Exception é uma classe propria do php no caso o ValidationException é uma classe que estamos criando q herda as propriedades da classe pai

    private $errors = []; // atributo da classe

    public function __construct(// construtor que serve para passar uma série de mensagens diferentes dependendo do erro que ocorrer e exibir diretamente no formulário
        $errors = [], // passando um array com mensagens de erro
        $message = 'Erros de validação',
        $code = 0, $previous = null) {
        parent::__construct($message, $code, $previous);
        $this->errors = $errors;
    }

    public function getErrors() {
        return $this->errors;
    }

    public function get($att) {
        return $this->errors[$att];// passar o atributo que for passado como parametro
    }
}