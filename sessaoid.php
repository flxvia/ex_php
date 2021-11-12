<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Web - Sessão de ID</title>
</head>
<body>
    <?php 
        session_start();
    ?>
    <h3>Sessão de Usuário</h3>
    SID desta sessão é: <?php echo session_id();?>
</body>
</html>