<?php
require_once("database.php");

class CategoryModel extends Database
{

    public function getAllCategory()
    {
        $stmt = $this->conn->prepare("SELECT * FROM category");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function addCategory($cid, $name, $description)
    {
        $stmt = $this->conn->prepare("INSERT INTO `category`(`cid`, `name`, `description`) VALUES (:cid, :name, :description)");
        $stmt->bindParam(':cid', $cid);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        return $this->conn->lastInsertId(); //get last inserted id
    }

    public function updateCategory($id, $cid, $name, $description)
    {
        $stmt = $this->conn->prepare("UPDATE `category` SET `cid`= :cid,`name`= :name,`description`= :description WHERE `id` = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':cid', $cid);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        return $stmt->rowCount(); //check how many row affected
    }

    public function deleteCategory($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM `category` WHERE `id` = :id");
        $stmt->bindParam(':id', $id);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        return $stmt->rowCount(); //check how many row deleted
    }
}
