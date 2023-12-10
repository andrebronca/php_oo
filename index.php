<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e Objetos em PHP</title>
</head>
<body>
    <?php
        require './Usuario.php';
        $usuario = new Usuario();
        $msg = $usuario->cadastrar("André","andre@gmail.com", 45);
        $resutl_usuarios = $usuario->listar();
        echo $msg."<hr>";
        foreach($resutl_usuarios as $row_usuario){
            //var_dump($row_usuario);
            extract($row_usuario);
            echo "Id: $id <br>";
            echo "Nome: $nome <br>";   //com extract
            echo "Email: ". $row_usuario['email'] ."<br><hr>"; //sem extract
        }

    ?>
</body>
</html>
