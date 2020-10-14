<?php
require_once('../model/staff.php');

class StaffController
{
    private $staff;

    function __construct()
    {
        $this->staff = new StaffModel;
        echo $this->staff->getData();
    }
}


$staff = new StaffController();
