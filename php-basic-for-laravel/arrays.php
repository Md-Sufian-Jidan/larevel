<?php

// $colors = ['red', 'green', 'blue'];
// $user = [
//     'name' => 'Jhon Doe',
//     'age' => 30,
// ];

// var_dump($user);
// var_dump($colors[0]);

// echo $colors[0];
// echo $user['name'];

// $blogPost = [
//     'title' => 'PHP 8.5',
//     'author' => [
//         'name' => 'John',
//         'role' => 'editor',
//     ],
//     'comments' => [
//         [
//             'user' => 'Jane',
//             'text' => 'Great article!',
//         ],
//     ],
// ];

// // var_dump($blogPost);
// echo $blogPost['comments'][0]['user'];

$colors = ['red', 'green', 'blue'];
// $colors[] = 'yellow'; // adding a value to the array

// var_dump(count($colors));
// if(count($colors) > 1){
// if(isset($colors) > 1){
//     echo "true";
// }

unset($colors[0]);
var_dump($colors);