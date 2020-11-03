<?php

// 問題A
$array = [
  'apple',
  'orange',
  'grape'
];

$array[1] = 'melon';
$array[] = 'peach';

echo '<pre>';
  var_dump($array);
echo '<pre>';

echo $array[0];


// 問題B
$boy = [
  'name' => 'John',
  'age' => 20,
  'hobby' => 'fishing'
];
$name_keys = array_keys($boy);

echo '<pre>';
  var_dump($boy);
echo '<pre>';
echo '<br>';
echo $name_keys[0] . "\n" . 'is' . '' . $boy['name'] .'' . 'and his' . '' . $name_keys[2] . '' . 'is' . '' . $boy['hobby'];
echo '<br>';
echo '<pre>';
  var_dump($name_keys);
echo '<pre>';


// 問題C






// 問題D









?>
