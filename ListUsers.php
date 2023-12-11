<?php

class ListUsers extends Conn {
    public object $conn;

    public function list(): array {
        $this->conn = $this->conectar();
        $sql = "SELECT id, nome, email FROM usuarios ORDER BY id DESC LIMIT 10";
        $result = $this->conn->prepare($sql);
        $result->execute();
        $lista = $result->fetchAll();
        //var_dump($lista);
        return $lista;
    }
}