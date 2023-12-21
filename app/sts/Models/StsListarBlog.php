<?php

namespace Sts\Models;

class StsListarBlog extends Conn {
    private object $conn;

    public function listar(): array {
        //echo "Acessou a model listar<br>";
        $this->conn = $this->connectDb();
        //var_dump($this->conn);
        $sql = "SELECT id, titulo, conteudo 
            FROM artigos 
            ORDER BY id DESC
            LIMIT 10";
        $result_artigos = $this->conn->prepare($sql);
        $result_artigos->execute();
        $artigos = $result_artigos->fetchAll();
        //var_dump($artigos);
        return $artigos;
    }
}