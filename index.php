<?php

require_once __DIR__ . "/models/products.php";
require_once __DIR__ . "/models/food.php";

$food1 = new Foods("6 €", "80 g");
var_dump($food1);
$food1->setPrice("7 €");

$product1 = new Products("tonno", "Rio Mare", "Cane", $food1);
var_dump($product1);

