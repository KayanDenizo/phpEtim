<?php 
require "register_action.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Usuario.class.php" method="post">
        <label for="name">Digite seu nome</label>
        <input type="text" name="name" id="name">

        <label for="email">Digite seu email</label>
        <input type="email" name="email" id="email">

        <label for="senha">Digite sua senha</label>
        <input type="password" name="senha" id="senha">

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>