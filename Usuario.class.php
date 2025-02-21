<?php
class Usuario {
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;

    function __construct() {
        $dns = "mysql:dbname=usuariopwii;host=localhost";
        $dbUser = "root";
        $dbPass = "";

        
        try {
            $this -> pdo = new PDO($dns, $dbUser, $dbPass);
            return true;
        } catch (\Throwable $th) {
            return false;
            
        }

    }
}