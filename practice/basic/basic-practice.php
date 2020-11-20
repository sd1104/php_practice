<?php

$fruits = ['apple', 'orange', 'grape'];
// $fruits[0] = 'melon';

array_unshift($fruits, 'pineapple');
array_shift($fruits);
array_push($fruits, 'peach');
array_pop($fruits);


$boys = [
  'john' => [
    'age' => 20,
    'hobby' => 'fishing'
  ],
  'mike' => [
    'age' => 21,
    'hobby' => 'singing'
  ]
  ];

foreach($fruits as $f) {
  echo $f;
}

?>