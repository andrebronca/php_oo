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

        require './Cliente.php';
        $cliente = new Cliente();
        $cliente->logradouro = "Rua x y";
        $cliente->bairro = "centro";
        $msg = $cliente->verEndereco();
        echo $msg;

        require './ClientePessoaFisica.php';
        $clientePF = new ClientePessoaFisica();
        $clientePF->logradouro = "Rua XV de Novembro";
        $clientePF->bairro = "Centro";
        $clientePF->nome = "André R. Bronca";
        $clientePF->cpf = 45635782184;
        $msg = $clientePF->verInformacaoUsuario();
        echo $msg;

        require './ClientePessoaJuridica.php';
        $clientePJ = new ClientePessoaJuridica();
        $clientePJ->logradouro = "Av. principal";
        $clientePJ->bairro = "centro";
        $clientePJ->nomeFantasia = "Economia & Qualidade";
        $clientePJ->cnpj = 99665544332000188;
        $msg = $clientePJ->verInformacaoEmpresa();
        echo $msg;
    ?>
</body>
</html>
