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
        $this->getConn();
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
        $this->getConn();
        $sql = "SELECT id, nome, email, created, modified FROM usuarios WHERE id = :id LIMIT 1";
        $user = $this->conn->prepare($sql);
        $user->bindParam(':id', $this->id);
        $user->execute();
        $value = $user->fetch();    //é no máximo um registro, usar o fetch()
        return $value;
    }

    public function edit(): bool {
        //var_dump($this->formData);
        $this->getConn();
        $sql = "UPDATE usuarios SET nome = :name, email = :email, modified = NOW() 
            WHERE id = :id";
        $user = $this->conn->prepare($sql);
        $user->bindParam(':name', $this->formData['name']);
        $user->bindParam(':email', $this->formData['email']);
        $user->bindParam(':id', $this->formData['id']);
        $user->execute();
        if($user->rowCount()){
            return true;
        }
        return false;
    }

    public function delete(): bool{
        $this->getConn();
        //LIMIT 1: orientação do professor. Ao meu ver não faz sentido pois id é pk
        $sql = "DELETE FROM usuarios WHERE id = :id LIMIT 1";
        $user = $this->conn->prepare($sql);
        $user->bindParam(':id', $this->id);
        $value = $user->execute();
        return $value;
    }


    private function getConn(){
        $this->conn = $this->connectDb();
    }
}