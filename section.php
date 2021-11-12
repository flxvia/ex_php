<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Web - Sessão de Usuário</title>
</head>
<body>
    <?php 
     
     session_start();

     $_SESSION['nome'] = "Administrador";
    
    ?>
    <h3>Sessão de Usuário</h3>
    Bem-vindo Sr(a). <?php echo $_SESSION['nome'];?>
</body>
</html>