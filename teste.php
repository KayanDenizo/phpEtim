<?php

require "Usuario.class.php";
$exito = $usuario = new Usuario();

if ($exito) {
    // $nome = "Adriano";
    // $email = "gira@gmailcom";
    // $senha = "123345";

    // $usuario->cadastrar($nome, $email, $senha);

    echo "<script>
             let menssage = document.body.createElement('h2');
            menssage.innerHTML = 'Usuario cadastrado com sucesso!';

        </script>";
} else {
    echo "<script>
             confirm('Erro ao conectar')
        </script>";
}
