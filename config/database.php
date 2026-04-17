<?php

class Database {
    public static function connect() {
        $host = "localhost";
        $db = "gestion_articulos";
        $user = "root";
        $pass = "1042852462";

        try {
            return new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
}
