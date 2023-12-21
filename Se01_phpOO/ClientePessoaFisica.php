<?php

//uso de herança, esta é uma subclasse de Cliente
class ClientePessoaFisica extends Cliente {
    public string $nome;
    public int $cpf;

    public function verInformacaoUsuario(): string {
        $dados = "Endereço da pessoa física:<br>";
        $dados .= "Logradouro: {$this->logradouro}<br>";
        $dados .= "Bairro: {$this->bairro}<br>";
        $dados .= "Nome: {$this->nome}<br>";
        $dados .= "CPF: {$this->cpf}<br>";
        return $dados."<hr>";
    }

    //recomendações de codificação em php: https://www.php-fig.org/psr/
}