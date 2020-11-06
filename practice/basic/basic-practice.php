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
function make_plus2() {
  $count = 0;
  while($count < 10) {
    $a = rand(1,9);
    $b = rand(1,9);
    echo $a . '+' . $b;
    echo '<br>';
    $count += 1;
  }
}

make_plus2();

$height = 180;
if($height >= 180) {
  echo 'tall';
  echo '<br>';
} else if ($height <= 100) {
  echo 'small';
  echo '<br>';
} else if ($height > 100 && $height < 180) {
  echo 'middle';
  echo '<br>';
} else {
  return '';
}








?>
