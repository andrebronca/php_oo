<?php

class Usuario {

    //tipando atributos
    public string $nome;
    public string $email;
    public int $idade;

    //tipando o retorno da função
    public function cadastrar($nome, $email, $idade): string {
        $this->nome = $nome;
        $this->email = $email;
        $this->idade = $idade;
        return "Usuário: <strong>". $this->nome ."</strong><br>".
            "email: <strong>{$this->email}</strong><br>". 
            "idade: <strong>{$this->idade}</stsrong><br>".
            "Cadastrado com sucesso! <br>";
        //concatenação e interpolação de variável
    }
}