<?php

abstract class Conn{
    public string $host = "localhost";
    public string $user = "root";
    public string $pass = "";
    public string $dbname = "andre";
    public int $port = 3308;
    public object $connect;

    public function connectDb(){
        try{
            $this->connect = new PDO("mysql:host={$this->host};port={$this->port}".
                ";dbname={$this->dbname}", $this->user, $this->pass);
            //echo "Conexão realizada  com sucesso!";
            return $this->connect;
        } catch(Exception $err){
            //echo "Debug de conexão: erro: ". $err->getMessage();
            //die("Contacte o suporte"); //die: não continua o processamento
            return false;   //indicando que não tem nada
        }
    }
}