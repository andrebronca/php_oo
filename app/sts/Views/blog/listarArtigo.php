<?php

//echo "View - listar artigos <br>";
//var_dump($this->dados);

foreach($this->dados['artigos'] as $artigo){
    //var_dump($artigo);
    extract($artigo);
    echo "Id: $id <br>";
    echo "Título: $titulo <br>";
    echo "Conteúdo: $conteudo <br>";
    echo "<hr>";
}