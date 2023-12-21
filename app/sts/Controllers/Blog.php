<?php
//o composer será responsável por carregar as páginas
namespace Sts\Controllers;

use Core\ConfigView;

class Blog{
    private array $dados;

    public function index(){
        //echo "Controller/página Blog - index<br>";
        $listarArtigo = new \Sts\Models\StsListarBlog();
        $this->dados['artigos'] = $listarArtigo->listar();
        //var_dump($this->dados);
        $view = new \Core\ConfigView("blog/listarArtigo", $this->dados);
        $view->renderizar();
    }
}