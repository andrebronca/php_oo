<?php

namespace Core;

//Essa classe irá carregar automaticamente os arquivos de view
class ConfigView {

    public function __construct(private string $nome, private array $dados)
    {
    }

    public function renderizar(){
        if(file_exists('app/sts/Views/'.$this->nome.'.php')){
            include 'app/sts/Views/'.$this->nome.'.php';
        } else {
            echo "Erro: Por favor tente novamente mais tarde. 
            Caso o problema persista, envie um e-mail para:
            adm@empresa.com.br";
            //poderia ser enviado para uma página de erro.
        }
    }
}