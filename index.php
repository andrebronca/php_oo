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
        $msg = $usuario->cadastrar();
        echo $msg;
    ?>
</body>
</html>
