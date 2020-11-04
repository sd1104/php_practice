<?php

$fruits = [];
$fruits[] = 'apple';
$fruits[] = 'orage';
$fruits[] = 'grape';

$fruits[1] = 'melon';
$fruits[] = 'peach';

var_dump($fruits);

echo '<br>';

$boy = [
  'name' => 'John',
  'age' => 20,
  'hobby' => 'fishing',
];

var_dump($boy);
echo '<br>';
echo $boy['hobby']



?>