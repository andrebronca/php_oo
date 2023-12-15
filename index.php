<?php
session_start();
//não deve ter nada antes de session, nem mesmo comentário
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OO</title>
</head>
<body>
    <a href="index.php">Listar</a><br>
    <a href="create.php">Cadastrar</a><br>

    <h2>Listar Usuários</h2>
    <?php
        //se a variável global estiver setada
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']); //destruir a variável global depois de exibida
        }
        require './Conn.php';
        require './User.php';
        
        $listUsers = new User();
        $lista = $listUsers->list();
        foreach($lista as $user){
            extract($user);
            echo "Id: $id<br>Nome: $nome<br>Email: $email";
            echo "<br><a href='view.php?id=$id'>Visualizar</a><br>";
            echo "<hr>";
        }
        
    ?>
</body>
</html>
