<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Employee;

$employee = new Employee(1, "Murilo", 1000);
$employee->raise(10);
$employee->show();

$employee->setId(2);
$employee->setName("Pedro");
$employee->setSalary(2000);
$employee->show();
