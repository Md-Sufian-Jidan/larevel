<?php

// function greet(string $name = 'You'){
//     echo "Hello World $name";
// };

// function add(int $number1 = 0, int $number2 = 0): int{
//     return $number1 + $number2;
// }

// greet();
// echo add(1,2);

$greet  = function(string $name = 'You'){
    echo "Hello World $name";
};

$greet('John');