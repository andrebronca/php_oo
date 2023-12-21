<?php

namespace Core; //precisa colocar para funcionar no index.php

class ConfigController {

    private string $url;
    private array $urlArray;
    private string $urlController;
    private string $urlMetodo;

    public function __construct()
    {
        if(!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))){
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
            //var_dump($this->url);
            $this->urlArray = explode("/", $this->url); //separar a string
            //var_dump($this->urlArray);
            
            //se há valor no array, então seta as posições
            if (isset($this->urlArray[0]) and isset($this->urlArray[1])){
                $this->urlController = $this->urlArray[0];
                $this->urlMetodo = $this->urlArray[1];
            } else {    //senão exibe uma página de erro
                $this->urlController = "erro";
                $this->urlMetodo = "index";    
            }
        } else {    //se não tiver nada na url irá para a página principal
            $this->urlController = "home";
            $this->urlMetodo = "index";
        }

        echo "Controller: {$this->urlController}, method: {$this->urlMetodo}";
        
        
        //http://localhost/ProjPHP/blog/artigos?origem=2&value=2
        //var_dump(filter_input(INPUT_GET,'origem',FILTER_DEFAULT));
    }
}