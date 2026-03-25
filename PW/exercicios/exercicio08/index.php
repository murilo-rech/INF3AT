<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Company\Employee;
use source\Models\Company\Seller;
use source\Models\Company\Manager;

$employee = new Employee(1, "Murilo", "murilo@gmail.com", "123456", 180, 10);
$manager = new Manager(1, "Murilo", "murilo@gmail.com", "123456", 60, 50, 2000);
$seller = new Seller(1, "Murilo", "murilo@gmail.com", "123456", 150, 20, 1000);

echo $employee->show();
echo $seller->show();
echo $manager->show();