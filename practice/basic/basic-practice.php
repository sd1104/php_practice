<?php

$fruits = ['apple', 'oragen', 'grape'];
$fruits[1] = 'melon';
$fruits[] = 'peach';
array_unshift($fruits, 'lemon');
array_push($fruits, 'pine');
array_shift($fruits);
array_pop($fruits);

var_dump($fruits);

?>