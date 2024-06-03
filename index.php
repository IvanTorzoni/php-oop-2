<?php

require_once __DIR__ . "/models/products.php";
require_once __DIR__ . "/models/food.php";
require_once __DIR__ . "/models/toy.php";


$product1 = new Foods("tonno", "Rio Mare", "Cane", "6 €", "60 g");
var_dump($product1);

$product2 = new Toys("Osso", "Tiaky", "Cane", "plastica", "40 g");
var_dump($product2);

