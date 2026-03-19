<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Product;
use source\Models\User;

$product = new Product(2, "Computador", 10000);
$user = new User(1, "Nome", "Email", "Senha");

var_dump($product);
$product->discount(10);
var_dump($product);
$product->show();
var_dump($user);