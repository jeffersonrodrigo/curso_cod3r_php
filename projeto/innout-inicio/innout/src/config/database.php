<?php

class Database {

    public static function getConnection() { // função nomeada
        $envPath = realpath(dirname(__FILE__) . '/../env.ini');
        $env = parse_ini_file($envPath);
        $conn = new mysqli($env['host'], $env['username'], 
            $env['password'], $env['database']);

        if($conn->connect_error) {
            die("Erro: " . $conn->connect_error);
        }

        return $conn;
    }

    public static function getResultFromQuery($sql) {
        $conn = self::getConnection();
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }

    public static function executeSQL($sql) { //se existir um id ele vai retornar o Id se não existir vai retornar nulo
        $conn = self::getConnection();
        if(!mysqli_query($conn, $sql)) { // se esse metodo nao retornar verdadeiro quer dizer que gerou um problema e vai cair no if
            throw new Exception(mysqli_error($conn));
        }
        $id = $conn->insert_id;
        $conn->close();
        return $id;
    }
}