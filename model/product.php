<?php
require_once("database.php");

class ProductModel extends Database
{

    public function getAllProduct()
    {
        $stmt = $this->conn->prepare("SELECT * FROM product");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        // var_dump($stmt->fetchAll());
        return $stmt->fetchAll();
    }

    public function getProduct($cid)
    {
        $stmt = $this->conn->prepare("SELECT * FROM product WHERE category_id = :cid");
        $stmt->bindParam(':cid', $cid);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        // var_dump($stmt->fetchAll());
        return $stmt->fetchAll(); //return result in assosiative array
    }

    public function addProduct($pid, $name, $description, $price, $category_id)
    {
        $stmt = $this->conn->prepare("INSERT INTO `product`(`pid`, `name`, `description`, `price`, `category_id`) VALUES (:pid, :name, :description, :price, :category_id)");
        $stmt->bindParam(':pid', $pid);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':category_id', $category_id);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        return $this->conn->lastInsertId(); //get last inserted id
    }

    public function updateProduct($id, $pid, $name, $description, $price, $category_id)
    {
        $stmt = $this->conn->prepare("UPDATE `product` SET `pid`= :pid,`name`= :name,`description`= :description,`price`= :price,`category_id`= :category_id WHERE `id` = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':pid', $pid);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':category_id', $category_id);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        return $stmt->rowCount(); //check how many row affected
    }

    public function deleteProduct($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM `product` WHERE `id` = :id");
        $stmt->bindParam(':id', $id);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        return $stmt->rowCount(); //check how many row deleted
    }
}
