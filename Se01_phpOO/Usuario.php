<?php

require './Conn.php';

class Usuario {

    //tipando atributos
    public string $nome;
    public string $email;
    public int $idade;
    public $connect;

    //tipando o retorno da função
    public function cadastrar($nome, $email, $idade): string {
        $this->nome = $nome;
        $this->email = $email;
        $this->idade = $idade;
        return "Usuário: <strong>". $this->nome ."</strong><br>".
            "email: <strong>{$this->email}</strong><br>". 
            "idade: <strong>{$this->idade}</strong><br>".
            "Cadastrado com sucesso! <br>";
        //concatenação e interpolação de variável
    }

    public function listar(){
        $conn = new Conn();
        $this->connect = $conn->conectar();

        $query_usuarios = "SELECT id, nome, email FROM usuarios ORDER BY id DESC LIMIT 40";
        $result_usuarios = $this->connect->prepare($query_usuarios);
        $result_usuarios->execute();

        return $result_usuarios->fetchAll();
    }
}