<?php
require_once('database.php');
class StaffModel
{
    protected $database;


    function __construct()
    {
        $this->database = new Database();
    }

    function getData()
    {

        // $stmt = $this->database->conn->prepare("SELECT * FROM department");
        // $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // $stmt->execute();
        // // var_dump($stmt->fetchAll());
        // return $stmt->fetchAll();
        return "Hello World";
    }
}
