<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public</title>
</head>
<body>
    <?php
    /*
    Link para documentação
    https://www.php-fig.org/psr/
    https://github.com/php-fig/fig-standards/blob/master/proposed/phpdoc.md
    https://github.com/php-fig/fig-standards/blob/master/proposed/phpdoc-tags.md
    utilizar no visual studio code uma extensão para documentar: PHP DocBlocker
    */
        require './Funcionario.php';
        require './Bonus.php';

        $func1 = new Funcionario();
        $func1->nome = "André";
        $func1->salario = 7986.5;
        echo $func1->verSalario();
        
        $func2 = new Bonus();
        echo $func2->verBonus();


    ?>
</body>
</html>