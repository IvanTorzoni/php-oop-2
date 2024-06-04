<?php

require_once __DIR__ . "/models/products.php";
require_once __DIR__ . "/models/food.php";
require_once __DIR__ . "/models/toy.php";
require_once __DIR__ . "/models/kennels.php";


$product1 = new Foods("tonno", "Rio Mare", "Cane", "6 €", "60 g");
$product1->setQuantity(10);
var_dump($product1);

$quantity = 0;

try {
    $product1->setQuantity($quantity);
} catch (Exception $e) {
    echo $e->getMessage();
}

$product2 = new Toys("Osso", "Tiaky", "Cane", "plastica", "40 g");
$product2->setQuantity(5);
var_dump($product2);

$product3 = new Kennels("Cuccia per gatto", "Lazy kingdome", "Gatto", "45 cm x 45 cm", "1000 g");
$product3->setQuantity(15);
var_dump($product3);
