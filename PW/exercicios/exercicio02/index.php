<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Order;

$order = new Order(1, "Murilo", 100);
$order->addFee(10);
$order->show();

$order->setId(2);
$order->setCustomerName("Pedro");
$order->setTotal(200);
$order->show();
