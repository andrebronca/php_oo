<?php
session_start();
ob_start(); //limpa o buffer para fazer o redirecionamento
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar User</title>
</head>
<body>
    <?php
        require './Conn.php';
        require './User.php';

        $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        
        if(!empty($formData['SendAddUser'])){
            //var_dump($formData);
            $createUser = new User();
            $createUser->formData = $formData;
            $value = $createUser->create();

            if($value){
                //cria uma variável global
                $_SESSION['msg'] = "<p style='color:green'>Usuário cadastrado com sucesso!</p>";
                //fazer o redirecionamento
                header("Location: index.php");
            } else {
                echo "<p style='color:red'>Usuário não cadastrado!</p>";
            }
        }
    ?>
    <a href="index.php">Listar</a><br>
    <a href="create.php">Cadastrar</a><br>

    <h2>Listar Usuários</h2>

    <form name="CreateUser" method="post" action="">
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" placeholder="Nome completo" required /><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="e-mail" required /><br><br>

        <input type="submit" value="Cadastrar" name="SendAddUser" />
    </form>
</body>
</html>
