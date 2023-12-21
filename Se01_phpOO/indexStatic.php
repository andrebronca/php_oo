<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando Static</title>
</head>
<body>
    <?php
        require './Disciplina.php';
        //obtendo valor do atributo static
        echo "Média inicial: ". Disciplina::$media ."<hr>";

        echo "Disciplina: Acúmulo de Adipócito abdominal <hr>";

        //instanciando para definir o valor da média
        $luquinha = new Disciplina("Luquinha", 2.9, 7.0);
        echo $luquinha->situacao();

        $andre = new Disciplina("André", 2.5, 7.0);
        echo $andre->situacao();

        $duda = new Disciplina("Dudinha", 1.0, 0);
        echo $duda->situacao();

        //acessando o método static
        echo Disciplina::situacaoAluno(6.5);
        echo Disciplina::situacaoAluno(4.9);
    ?>
</body>
</html>