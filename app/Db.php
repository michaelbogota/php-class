<?php

class Db
{

    private $db;
    private $host;
    private $port;
    private $dbname;
    private $user;
    private $password;

    public function __construct()
    {
        $this->host = $_ENV['HOST_DB'];
        $this->port = "5432";
        $this->dbname = $_ENV['DB'];
        $this->user = $_ENV['HOST_DB_USER'];
        $this->password = $_ENV['HOST_DB_PASS'];

        $this->connect();
    }

    private function connect()
    {
        $this->db = pg_connect("host=$this->host port=$this->port dbname=$this->dbname user=$this->user password=$this->password");
        if (!$this->db) {
            echo "Error al conectar a la base de datos: " . pg_last_error();
        }
    }

    public function query($sql)
    {
        $result = pg_query($this->db, $sql);
        if (!$result) {
            echo "Error al ejecutar la consulta: " . pg_last_error($this->db);
        }
        return $result;
    }

    public function close()
    {
        pg_close($this->db);
    }

    public function __destruct()
    {
        $this->close();
    }

}