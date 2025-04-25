<?php
class Usuario
{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;

    public function __construct()
    {

        $dns = "mysql:dbname=Usuario;host=localhost";
        $dbUser = "root";
        $dbPass = "";

        try {
            $this->pdo = new PDO($dns, $dbUser, $dbPass);

        } catch (\Throwable $th) {
            echo "Erro ao conectar ao banco de dados: " . $th->getMessage();
            exit;
        }
    }


    public function cadastrar($nome, $email, $senha)
    {


        //primeiro passo: criar a consulta SQL (query)
        $sql = "INSERT INTO Usuarios SET nome = :n, email = :e, senha = :s";

        //Segundo passo: passar a consulta para o metodo prepare do PDO
        $stmt = $this->pdo->prepare($sql);


        //Terceiro passo: para cada apelido, passar o valor correspondente
        $stmt->bindValue(":n", $nome);
        $stmt->bindValue(":e", $email);
        $stmt->bindValue(":s", $senha);


        //quarto passo: executar o comando
        return $stmt->execute();

        // Sempre sera 4 passos para inserir
    }


    public function chkUser($email)
    {
        $sql = "SELECT * FROM Usuarios WHERE email = :e";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":e", $email);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
