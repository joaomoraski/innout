<?php


class Database {
    public static function getConnection(){
        $envPath = realpath(dirname(__FILE__) . '/../env.ini'); //Pega o caminho
        $env = parse_ini_file($envPath); //consome o env.ini
        $conn = new mysqli($env['host'], $env['username'], $env['password'], $env['database']);

        if ($conn->connect_error){
            die("Erro: " . $conn->connect_error);
        }

        return $conn;
    }

    public static function getResultFromQuery($sql){
        $conn = self::getConnection();
        $result = $conn->query($sql);
        $conn->close();

        return $result;

    }
}