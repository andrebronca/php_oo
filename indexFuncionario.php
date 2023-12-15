<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public</title>
</head>
<body>
    <?php
        require './Funcionario.php';
        $func1 = new Funcionario();
        $func1->nome = "André";
        $func1->salario = 7986.5;
        echo $func1->verSalario();
    ?>
</body>
</html>