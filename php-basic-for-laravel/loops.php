<?php

$colors = ['red', 'green', 'blue'];

// foreach($colors as $color){
//     echo $color . "\n";
// }

// foreach($colors as $key => $color){
//     echo $key . "\n";
// } 

// $invoiceItems = [
// ['item' => 'Laptop', 'price' => 1200],
// ['item' => 'Mouse', 'price' => 75],
// ['item' => 'Keyboard', 'price' => 100]
// ];

// $totals = 0;

// foreach($invoiceItems as $item){
//     // $totals = $totals + $item['price'];
//     $totals += $item['price'];
// };

// echo "Total: $totals";

// for ($i=0; $i < 10; $i++) { 
//     echo $i . '\n';
// };

// for ($i=10; $i > 0; $i--) { 
//     echo $i . '\n';
// };

// $count = 0;
// while($count < 5){
//     var_dump($count);
//     $count++;
// };

// $count = 1000;
// do {
//     var_dump($count);
//     $count++;
// } while ($count < 5);

// $users = [
// ['name' => 'John', 'newsletter' => true],
// ['name' => 'Jane', 'newsletter' => false],
// ['name' => 'Bob', 'newsletter' => true]
// ];

// foreach($users as $user){
//     if(!$user['newsletter']){
//         continue;
//         // break;
//     }
//     echo $user['name'] . " is subscribed to the newsletter.\n"; 
// }

$numbers = [1, 2, 3, 4, 5];
$doubled = [];

foreach ($numbers as $number) {
$doubled [] = $number * 2;
}
var_dump($doubled);

// With Laravel Collections
// $doubled = collect([1, 2, 3, 4, 5]) -> map(fn($number) => $number * 2);