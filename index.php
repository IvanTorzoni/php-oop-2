<?php

require_once __DIR__ . "/models/products.php";

$product1 = new Products("tonno", "Rio Mare", "Cane");
var_dump($product1);