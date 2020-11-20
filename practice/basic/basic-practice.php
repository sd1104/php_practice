<?php

$fruits = ['apple', 'orange', 'grape'];
// $fruits[0] = 'melon';

array_unshift($fruits, 'pineapple');
array_shift($fruits);
array_push($fruits, 'peach');
array_pop($fruits);


var_dump($fruits);


?>