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
    <title>Editar o usuário</title>
</head>
<body>
    <a href="index.php">Listar</a><br>
    <a href="create.php">Cadastrar</a><br>

    <h2>Editar o Usuário</h2>
    <?php
        //se a variável global estiver setada
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']); //destruir a variável global depois de exibida
        }

        if(!empty($id)){
            require './Conn.php';
            require './User.php';

            //-- início dos dados editados
            //receber os dados editados do formulário
            $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

            //clicado no botão de editar
            if(!empty($formData['SendEditUser'])){
                //var_dump($formData);
                $editUser = new User();
                $editUser->formData = $formData;    //enviando os dados do formulário para a classe
                $value = $editUser->edit();
                if($value){
                    //cria uma variável global
                    $_SESSION['msg'] = "<p style='color:green'>Usuário editado com sucesso!</p>";
                    //fazer o redirecionamento
                    header("Location: index.php");
                } else {
                    //cria uma variável global
                    $_SESSION['msg'] = "<p style='color:red'>Usuário não editado!</p>";
                    //fazer o redirecionamento
                    header("Location: index.php");
                }
            } //-- término dos dados editados

            //-- início visualização dos dados para edição, antes de clicar em editar
            //echo "Id do usuário: $id<br>";
            $viewUser = new User();
            $viewUser->id = $id;    //ler id do get e atribuir ao objeto
            $valueUser = $viewUser->view();
            
            //var_dump($valueUser);
            extract($valueUser);
        ?>
        <form name="EditUser" method="post" action="">
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
            
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" value="<?php echo $nome; ?>" 
                placeholder="Nome completo" required /><br><br>
            
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo $email; ?>" 
                placeholder="e-mail" required /><br><br>

            <input type="submit" value="Editar" name="SendEditUser" />
        </form>
        <?php
        } else {
            //cria uma variável global
            $_SESSION['msg'] = "<p style='color:red'>Usuário não encontrado!</p>";
            //fazer o redirecionamento
            header("Location: index.php");
        }
        //-- término visualização dos dados para edição, antes de clicar em editar
    ?>
</body>
</html>
