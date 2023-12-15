<?php

class User extends Conn {
    public object $conn;
    public array $formData;
    public int $id;

    public function list(): array {
        $this->conn = $this->connectDb();
        $sql = "SELECT id, nome, email FROM usuarios ORDER BY id DESC LIMIT 10";
        $result = $this->conn->prepare($sql);
        $result->execute();
        $lista = $result->fetchAll();   //fetchAll() utilizado para vários registros
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

    public function view(): array {
        //var_dump($this->id);
        $this->conn = $this->getConn();
        $sql = "SELECT id, nome, email, created, modified FROM usuarios WHERE id = :id LIMIT 1";
        $user = $this->conn->prepare($sql);
        $user->bindParam(':id', $this->id);
        $user->execute();
        $value = $user->fetch();    //é no máximo um registro, usar o fetch()
        return $value;
    }


    private function getConn():object{
        return $this->connectDb();
    }
}