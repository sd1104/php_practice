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
foreach($boy as $key => $value) {
  echo $key . ':' . $value;
};

echo '<br>';

function make_plus() {
  for($i = 0; $i < 10; $i++) {
    $a = rand(1,9);
    $b = rand(1,9);
    echo $a . '+' . $b;
    echo '<br>';
  }
}




?>
