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

    function cadastrar($nome, $email, $senha) {
        $sql = "INSERT INTO usuario SET nome = :n, email = :e, senha = :s";

        //Passar a query para o banco de dados
        $stmt = $this -> pdo -> prepare($sql);  

        // Passar os valores para a query
        $stmt ->bindValue(":n", $nome);
        $stmt ->bindValue(":e", $email);
        $stmt ->bindValue(":s", $senha);
    
        $stmt -> execute();
    } 
}