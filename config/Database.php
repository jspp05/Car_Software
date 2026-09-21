<?php

class Database{
    private $host;
    private $port;
    private $dbName;
    private $user;
    private $pwd;
    private $connection;

    public function __construct (){
        $env = parse_ini_file(__DIR__ . "/../.env");

        $this->host = $env["DB_HOST"];
        $this->port = $env["DB_PORT"];
        $this->dbName = $env["DB_NAME"];
        $this->user = $env["DB_USER"];
        $this->pwd = $env["DB_PWD"];
    } 

       public function conectar(){
        $dsn = "mysql:host={$this->host};port={$this->port};dbname={$this->dbName}";
        $this->connection = new PDO($dsn, "$this->user","$this->pwd");

        return $this->connection;
    }


}