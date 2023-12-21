<?php
//o composer será responsável por carregar as páginas
namespace Sts\Controllers;

class Blog{
    private array $dados;

    public function index(){
        //echo "Controller/página Blog - index<br>";
        $listarArtigo = new \Sts\Models\StsListarBlog();
        $this->dados = $listarArtigo->listar();
        var_dump($this->dados);
    }
}