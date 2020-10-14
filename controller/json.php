<?php

// $companyData = $_POST['company'];
//or $companyData = json_decode($_POST['company']);
//or whatever depending on how you are posting

class Company
{

    private $_data;

    function __construct($json)
    {
        $data = json_decode($json, true);
        print_r($data[0]);
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }
}

// $json = file_get_contents('http://example.org/sheldon.json');
$json = '[{
            "name":"Sheldon Cooper",
            "address": {
                "street": "2311 N. Los Robles Avenue",
                "city": "Pasadena"
            }
        }]';
// $company = new Company($json);
// print_r($company);


// class MyClass
// {
//     public function __construct(array $properties = array())
//     {
//         foreach ($properties as $key => $value) {
//             $this->{$key} = $value;
//         }
//     }
// }
// $foo = new MyClass(array("hello" => "world"));
// echo $foo->hello; // => "world"

class MyClass
{

    private $_data;

    public function __construct(array $properties = array())
    {
        $this->_data = $properties;
    }

    // magic methods!
    public function __set($property, $value)
    {
        return $this->_data[$property] = $value;
    }

    public function __get($property)
    {
        return array_key_exists($property, $this->_data)
            ? $this->_data[$property]
            : null;
    }
}

// init
$foo = new MyClass(array("hello" => "world"));
// echo $foo->hello;          // => "world"

$data = json_decode($json, true);
$foo->data = $data[0];
// set: this calls __set()
// $foo->invader = "zim";

// // get: this calls __get()
// echo $foo->invader;       // => "zim"

// // attempt to get a data[key] that isn't set
// echo $foo->invalid;

print($foo->data["address"]["street"]);
