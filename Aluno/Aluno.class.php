<?php 

class Aluno {
    private $id;
    private $ra;
    private $nome;
    private $curso;
    private $periodo;
    private $pdo;

    public function getRa() {
        return $this->ra;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getCurso() {
        return $this->curso;
    }
    public function getPeriodo() {
        return $this->periodo;
    }

    public function setRa($ra) {
        $this->ra = $ra;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setCurso($curso) {
        $this->curso = $curso;
    }
    public function setPeriodo($periodo) {
        $this->periodo = $periodo;
    }

    public function __construct() {
        /* A Classe PDO foi criada para auxiliar a interacao com DB
        Ela precisa de tres atributos */

        $dns = "mysql:dbname=usuarioetimpwii;host=localhost";
        $user = "root";
        $pass = "";

        try {
            $this->pdo = new PDO($dns,$user,$pass);
            return true;
        } catch (\Throwable $th) {
            return false;
        }

    }
}

?>