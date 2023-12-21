<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PHP em MVC</title>
</head>
<body>
    <?php
    //vendor/autoload encarrega-se de carregar os arquivos.
        require './vendor/autoload.php';
        //Core é o namespace, em composer.json está setado o namespace
        //namespace deve ser inserido antes dos nomes das classes
        //ConfigController é a classe que será injetada pelo autoload
        $url = new Core\ConfigController();
    ?>
</body>
</html>