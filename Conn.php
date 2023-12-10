<?php

class Conn{
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $dbname = "andre";
    public $port = 3308;
    public $connect = null;

    public function conectar(){
        try{
            $this->connect = new PDO("mysql:host={$this->host};port={$this->port}".
                ";dbname={$this->dbname}", $this->user, $this->pass);
            //echo "Conexão realizada  com sucesso!";
            return $this->connect;
        } catch(Exception $err){
            //echo "Debug de conexão: erro: {$err}";
            echo "Falha na conexão com BD!";
            return false;   //indicando que não tem nada
        }
    }
}