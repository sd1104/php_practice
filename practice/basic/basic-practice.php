<?php

$fruits = ['apple', 'orange', 'grape'];
$fruits[1] = 'melon';
$fruits[] = 'peach';
var_dump($fruits);


$boy = [
  'name' => 'John',
  'age' => 20,
  'hobby' => 'fishing'
];
echo $boy['hobby'];


foreach($fruits as $key => $fruit) {
  echo $fruit;
};







?>
