<?php
abstract class Employee
{
    private $first_name;
    protected $last_name;
    private $age;

    public function __construct()
    {
    }

    public function setEmployee($first_name, $last_name, $age)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }
    public function getLastName()
    {
        return $this->last_name;
    }

    public function getAge()
    {
        return $this->age;
    }

    abstract public function getAll();
}

class Staff extends Employee
{
    private $staff_id;
    private $staff_position;

    public function getAll()
    {
        return [$this->getFirstName(), $this->getLastName(), $this->getAge(), $this->staff_id, $this->staff_position];
    }

    function setStaff($staff_id, $staff_position)
    {
        $this->staff_id = $staff_id;
        $this->staff_position = $staff_position;
        $this->setEmployee("Najib", "Ali", 31);
    }
    function getAge()
    {
        return 60;
    }
    function getStaff()
    {
        return [$this->staff_id, $this->staff_position];
    }
}

// $person = new Employee();
// $person->setEmployee("Abu", "Khalifah", 31);
// echo $person->getFirstName(); // Abu
// echo "<br>";
// echo $person->getLastName(); // Khalifah
// echo "<br>";
// echo $person->getAge(); // 31
// echo $person->first_name; // error


echo "<br>";
echo "<br>";
// $employee = new Employee();
$staff = new Staff();
// $staff->setEmployee("Abu", "Khalifah", 31);
$staff->setStaff("Staf001", "B41");
// echo $staff->getFirstName();
print_r($staff->getStaff());
echo "<br>";
print_r($staff->getAll());
