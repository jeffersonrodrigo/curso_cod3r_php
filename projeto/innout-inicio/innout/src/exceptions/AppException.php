<?php

class AppException extends Exception { // Exception é uma classe propria do php no caso o appException é uma classe que estamos criando q herda as propriedades da classe pai

    public function __construct($message, $code = 0, $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}