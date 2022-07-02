<?php

namespace Config {
    class Database
    {
        static function getConnection(): \PDO
        {
            $host = "localhost";
            $port = 3306;
            $dbname = "belajar_php_todolist";
            $username = "root";
            $password = "";
            return new \PDO("mysql:host=$host:$port;dbname=$dbname", $username, $password);
        }
    }
}
