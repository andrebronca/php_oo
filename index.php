<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e Objetos em PHP</title>
</head>
<body>
    <?php
        require './Cheque.php';
        require './ChequeComum.php';
        require './ChequeEspecial.php';

        //definida a classe Cheque como abstrata, não pode mais ser instanciada
        //$cheque = new Cheque(999.9, "comum");
        //$msg = $cheque->verValor();
        //echo $msg."<hr>";

        $chequeComum = new ChequeComum(1999.99, "C");
        $msg = $chequeComum->calcularJuro();
        echo $msg."<hr>";

        $chequeEspecial = new ChequeEspecial(2998.89, "E");
        $msg = $chequeEspecial->calcularJuro();
        echo $msg."<hr>";
    ?>
</body>
</html>
