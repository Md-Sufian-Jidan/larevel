<?php

class Product {
// public string $name;
// public int $price;

// public function __construct(string $name, int $price){
//     $this->name = $name;
//     $this->price = $price;
// }
public function __construct(public string $name,public int $price){

}

public function isExpensive(): bool{
    return $this->price > 1000;

}
}

$product1 = new Product("Laptop", 1200);
$product2 = new Product("Mouse", 75);
var_dump($product1->isExpensive());
var_dump($product2->isExpensive());