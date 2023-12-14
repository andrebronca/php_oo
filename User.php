<?php

class User extends Conn {
    public object $conn;
    public array $formData;

    public function list(): array {
        $this->conn = $this->connectDb();
        $sql = "SELECT id, nome, email FROM usuarios ORDER BY id DESC LIMIT 10";
        $result = $this->conn->prepare($sql);
        $result->execute();
        $lista = $result->fetchAll();
        //var_dump($lista);
        return $lista;
    }

    public function create(): bool{
        //var_dump($this->formData);
        $this->conn = $this->getConn();
        $sql = "INSERT INTO usuarios (nome, email, created) VALUES (:name, :email, NOW())";
        $add_user = $this->conn->prepare($sql);
        $add_user->bindParam(':name', $this->formData['name']);
        $add_user->bindParam(':email', $this->formData['email']);
        $add_user->execute();

        if($add_user->rowCount()){
            return true;
        }
        return false;
    }

    private function getConn():object{
        return $this->connectDb();
    }
}