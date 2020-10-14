<?php
require_once('../model/category.php');

class CategoryController
{
    private $category;

    function __construct()
    {
        $this->category = new CategoryModel;
        print_r($this->category->getAllCategory());
    }
}


