<?php 
    // Importar classe
    require 'Usuario.class.php';

    $sucesso = $usuario = new Usuario();

    if ($sucesso ) {
        echo "Conectado ao banco de dados";
    }else {
        echo "Erro ao conectar ao banco de dados";
    }

    $usuario -> cadastrar("Kayan", "kayan@gmail.com", "123456");
?>