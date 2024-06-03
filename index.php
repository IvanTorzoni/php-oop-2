<?php

require_once __DIR__ . "/models/products.php";
require_once __DIR__ . "/models/food.php";


$product1 = new Foods("tonno", "Rio Mare", "Cane", "6 €", "60 g");
var_dump($product1);

