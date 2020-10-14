<?php
require_once($base . '/model/product.php');
require_once($base . '/model/category.php');

class ProductController
{
    private $product;
    private $category;
    protected $values = array();

    function __construct()
    {
        $this->product = new ProductModel();
        $this->category = new CategoryModel();
        // $this->index();
    }

    function index()
    {
        $this->addView();
    }

    function listView()
    {
        $productList = $this->product->getAllProduct();
        include(__DIR__ . '/../view/product_list.php');
    }

    function addView()
    {
        $categoryList = $this->category->getAllCategory();
        include(__DIR__ . '/../view/add_product.php');
    }

    function add()
    {
        // print_r($_POST);
        $this->product->addProduct(
            $_POST["pid"],
            $_POST["name"],
            $_POST["description"],
            $_POST["price"],
            $_POST["category"],
        ); //send data to model for insert into table
        header('Location: /myoop/product'); //redirect to list of product page
    }

    function update()
    {
        $productList = $this->product->getAllProduct();
        $this->product->updateProduct(
            $productList[0]["id"],
            $productList[0]["pid"],
            $productList[0]["name"],
            $productList[0]["description"],
            "12.10",
            $productList[0]["category_id"]
        );
        sendData($this->product->getProduct(1));
    }

    function delete()
    {
        $this->product->deleteProduct(1);
        sendData($this->product->getProduct(1));
    }
}
