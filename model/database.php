<?php

class Database
{
    private $servername = "localhost";
    private $dbname = "myoop";
    private $username = "root";
    private $password = "mysql";
    public $conn;

    function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;
            dbname=$this->dbname", $this->username, $this->password);

            $this->conn->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            // echo "Connected successfully </br>";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage() . " </br>";
        }
    }
}
