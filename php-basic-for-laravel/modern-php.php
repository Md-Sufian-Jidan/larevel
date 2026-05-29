<?php

// class User
// {
//     public function __construct(
//         public readonly string $name, 
//         public string $email
//         ) {}

//     public function getInfo(): string
//     {
//         return "Name: {$this->name}, Email: {$this->email}";
//     }
// }

// $user = new User('Chris', 'email');
// // $user->name = 'John'; // Error: Cannot modify readonly property User::$name
// $user -> email = 'newemail@example.com';
// echo $user->getInfo();

// $status = 200;
// switch ($status) {
//     case 200:
//         $result = 'success';
//         break;
//     case 404:
//         $result = 'not found';
//         break;
//     case 500:
//         $result = 'server error';
//         break;
//     default:
//         $result = 'unknown status';
// }

// echo $result;

// $status = 200;
// $result = match ($status) {
//     200 => 'success',
//     404 => 'not found',
//     500 => 'server error',
//     default => 'unknown status'
// };

// echo $result;

// class Address
// {
//     public function getCountry()
//     {
//         return 'Austria';
//     }
// }
// class Order
// {
//     public function getAddress()
//     {
//         return null; // Could be null for digital products
//     }
// }
// $order = new Order();

// if($order->getAddress()){
//     $country = $order->getAddress()?->getCountry();
// } else {
//     $country = null;
// }

// var_dump($country); // Notice: Trying to get property 'getCountry' of non-object

class Product
{
    public function __construct(
        public string $name,
        public ?float $price = null,
        public ?float $beforePrice = null,
        public ?float $afterPrice = null,
    ) {}
};

// $product = new Product('Laptop', null, null, 100,);
// $product = new Product(
//     name: 'Laptop',
//     afterPrice: 100,
// );
// var_dump($product);