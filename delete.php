<?php
session_start();
ob_start();
//receber o id do usuário pela url
//método get, nome do atributo, tem que ser um inteiro
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

//verificar se id possui valor
if(!empty($id)){
    require './Conn.php';
    require './User.php';

    $userDelete = new User();
    $userDelete->id = $id;  //enviando o id para exclusão
    $value = $userDelete->delete();
    
    if($value){
        $_SESSION['msg'] = "<p style='color:green'>Usuário excluído com sucesso!</p>";
        //fazer o redirecionamento
        header("Location: index.php");
    } else {
        $_SESSION['msg'] = "<p style='color:red'>Usuário não excluído!</p>";
        //fazer o redirecionamento
        header("Location: index.php");
    }

} else {
    //cria uma variável global
    $_SESSION['msg'] = "<p style='color:red'>Usuário não localizado!</p>";
    //fazer o redirecionamento
    header("Location: index.php");
}
