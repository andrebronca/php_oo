<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface em PHP</title>
</head>
<body>
<?php
    //utilizando implementação de interface
    require './ICurso.php';
    require './CursoPosGraduacao.php';
    require './CursoGraduacao.php';

    $cursoPosGraduacao = new CursoPosGraduacao();
    echo $cursoPosGraduacao->disciplina("Desenvolvimento Web com PHP");
    echo $cursoPosGraduacao->professor("André R. Bronca");
    echo "<hr>";

    $cursoGraduacao = new CursoGraduacao();
    echo $cursoGraduacao->disciplina("Banco de dados com MySql");
    echo $cursoGraduacao->professor("André R. Bronca");
    echo "<hr>";

    
?>

</body>
</html>