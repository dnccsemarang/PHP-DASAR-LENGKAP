<?php 

require_once "data/Product.php";

$product = new Product("Apple",20000);
$productDummy = new productDummy("Apple",20000);

// echo $product->name;
echo $product->getName();
echo $product->getPrice();


echo $productDummy->info();