<div class="titulo">Criar Banco</div>

<?php

require_once "conexao.php"; // requerendo o arquivo conexao para a criação do BD

$conexao = novaConexao(null);
$sql = 'CREATE DATABASE IF NOT EXISTS curso_php'; // variavél q tem o comando para criar o database

$resultado = $conexao->query($sql); // query é uma função q passando a variavel sql ira ser responsabel por criar o banco de dados

if($resultado) {
    echo "Sucesso :)";
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();