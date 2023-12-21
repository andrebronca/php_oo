<?php
session_start();
ob_start(); //limpar o buffer de saída, para fazer o redirecionamento

//receber o id do usuário pela url
//método get, nome do atributo, tem que ser um inteiro
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do usuário</title>
</head>
<body>
    <a href="index.php">Listar</a><br>
    <a href="create.php">Cadastrar</a><br>

    <h2>Detalhes do Usuário</h2>
    <?php
        //se a variável global estiver setada
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']); //destruir a variável global depois de exibida
        }

        if(!empty($id)){
            require './Conn.php';
            require './User.php';
            //echo "Id do usuário: $id<br>";
            $viewUser = new User();
            $viewUser->id = $id;    //ler id do get e atribuir ao objeto
            $valueUser = $viewUser->view();
            
            //var_dump($valueUser);
            extract($valueUser);
            echo "Id do usuário: $id<br>";
            echo "Nome: $nome<br>";
            echo "E-mail: $email<br>";
            echo "Cadastrado em: ". date('d/m/Y H:i:s', strtotime($created)) ."<br>";
            echo "Editado em: ";
            if(!empty($modified)){
                //formatando a exibição do tipo date
                echo date('d/m/Y H:i:s', strtotime($modified));
            }
            echo "<br><hr>";
        } else {
            //cria uma variável global
            $_SESSION['msg'] = "<p style='color:red'>Usuário não encontrado!</p>";
            //fazer o redirecionamento
            header("Location: index.php");
        }
        
    ?>
</body>
</html>
