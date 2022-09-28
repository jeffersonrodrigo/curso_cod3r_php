<?php
// a função nova conexao vai receber como parametro o banco de dados que quer conectar
function novaConexao($banco = 'curso_php') { // passado como valor padrao 'curso_php', em caso q nao passe algum valor para $banco ele vai criar esse
    $servidor = '127.0.0.1:3307';
    $usuario = 'root';
    $senha = 'root';// num sistema real colocar essas informações em um outro lugar mais seguro
    // criando nova instancia do MySQL I (objeto)
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);
    // verificar se a conexao foi feita com sucesso
    if($conexao->connect_error) { // se estiver setada essa variavel quer dizer que a conexao nao aconteceu de forma bem sucedida
        die('Erro: ' . $conexao->connect_erro); //forma de tratamento de erro muito simples. Não deve ser usada em ambientes reais
    }

    return $conexao;
}