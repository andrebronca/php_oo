<?php

namespace Sts\Models;

use PDO;
use PDOException;

abstract class Conn {
    private string $db = "mysql";
    private string $host = "localhost";
    private string $user = "root";
    private string $pass = "";
    private string $dbname = "andre";
    private int $port = 3308;
    private object $connect;

    public function connectDb(){
        try{
            $this->connect = new PDO("{$this->db}:host={$this->host};port={$this->port}".
                ";dbname={$this->dbname}", $this->user, $this->pass);
            //echo "Conexão realizada  com sucesso!";
            return $this->connect;
        } catch(PDOException $err){
            //echo "Debug de conexão: erro: ". $err->getMessage();
            //die("Contacte o suporte"); //die: não continua o processamento
            return false;   //indicando que não tem nada
        }
    }
}