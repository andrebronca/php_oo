<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e Objetos em PHP</title>
</head>
<body>
    <?php
        require './Conn.php';
        require './ListUsers.php';
        
        $listUsers = new ListUsers();
        $lista = $listUsers->list();
        foreach($lista as $user){
            extract($user);
            echo "Id: $id<br>Nome: $nome<br>Email: $email<hr>";
        }
        
    ?>
</body>
</html>
