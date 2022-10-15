<?php
class Login extends Model { // class model criada em /models/Model.php

    public function validate() { //validando nao o usuario que obtive do banco de dados e sim os dados do usuário que foi passado dentro do formulario de login
        $errors = [];

        if(!$this->email) {
            $errors['email'] = 'E-mail é um campo obrigatório!'; // validando para saber se tem o email
        }
        
        if(!$this->password) {
            $errors['password'] = 'Por favor informe a senha.'; // validando para ver se tem a senha
        }

        if(count($errors) > 0) { // se o numero de $errors for maior que zero lançar ValidationException em cima de $errors
            throw new ValidationException($errors);
        }
    }

    public function checkLogin() { // função para checar se o usuario está logado ou nao
        $this->validate();
        $user = User::getOne(['email' => $this->email]);// criando variavel que está pegando através da classe criada pela função getOne (src\models\Model.php) e passando parametro chave => valor
        if($user) {
            if($user->end_date) { // se o end_date estiver setado(ou seja o funcionario nao faz mais parte da empresa) cai nessa exceção
                throw new AppException('Usuário está desligado da empresa.');
            }

            if(password_verify($this->password, $user->password)) { //primeiro parametro: senha digitada pelo usuario - segundo parametro: senha do banco de dados // verifica se a senha está correta #aula 253 - 7:40
                return $user;
            }
        }// se passou pelos IFs e chegou até aqui cai na exceção
        throw new AppException('Usuário e Senha inválidos.'); // throw = lançar # aqui estamos lançando a exceção criada pela classe AppException e passando como $message a string
    }
}