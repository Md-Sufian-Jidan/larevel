<?php

class Product
{
    // public string $name;
    // public int $price;

    // public function __construct(string $name, int $price){
    //     $this->name = $name;
    //     $this->price = $price;
    // }
    public function __construct(public string $name, public int $price) {}

    public function isExpensive(): bool
    {
        return $this->price > 1000;
    }
    public function hasDiscount(): bool
    {
        return $this->price < 100;
    }

    public function getDescription(): string
    {
        return "{$this->name} costs {$this->price}€";
    }

    private function getLink(): string
    {
        return "https://example.com/products/";
    }
}

class DigitalProduct
{
    public function getLink(): string
    {
        return 'app-link';
    }
}

$product1 = new Product("Laptop", 1200);
$product2 = new Product("Mouse", 75);
var_dump($product1->isExpensive());
var_dump($product2->isExpensive());
