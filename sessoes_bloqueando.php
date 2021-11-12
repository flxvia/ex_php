<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bloqueando páginas por sessões</title>
    <?php 
        session_start();

        $_SESSION["nome"] = $_POST["nome"];
        $_SESSION["senha"] = $_POST["senha"];
    ?>
</head>
<body>
    <b> Funcionário: </b> <?php echo $_SESSION["nome"] ?>, logado com sucesso.
    <br>
    <b> Data de conexão: </b> <?php echo date("d/m/Y") ?> 
    <br> 
    <b> Hora da conexão: </b> <?php echo date("H:i:s") ?> 
    <br> 
    <a href="bloqueando_paginas.php">Área do administrador</a>
</body>
</html>