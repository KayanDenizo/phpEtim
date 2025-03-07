<?php
// Importar classe
require 'Usuario.class.php';

$sucesso = $usuario = new Usuario();

if ($sucesso) {

    $usuario->cadastrar("Adriano", "adri@gmail.com", "123456");
} else {
    echo "Erro ao conectar ao banco de dados";
}
