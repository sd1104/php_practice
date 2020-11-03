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
foreach($boy as $k => $v) {
  echo $k . '&nbsp' . 'is' . '&nbsp' ;
  echo $v . '.' . '&nbsp' ;
};

function make_minus() {
  $count = 0;
  while($count < 10) {
    $A = rand(1, 99);
    $B = rand(1, 99);
    while($A < $B ) {
      $A = rand(1, 99);
      $B = rand(1, 99);
    }
    echo $A . '&nbsp' . '-' . '&nbsp' . $B ;
    echo '<br>';
    $count++;
  }
};
make_minus();

function make_minus() {
  for($i = 0; $i < 10; $i++) {
    $A = rand(1, 99);
    $B = rand(1, 99);
    while($A < $B ) {
      $A = rand(1, 99);
      $B = rand(1, 99);
    }
    echo $A . '&nbsp' . '-' . '&nbsp' . $B ;
    echo '<br>';
  }
};
make_minus();

// 問題D









?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>basic practice</title>
</head>
<body>

  <form method="POST" action="basic-practice.php">
    <input type="number" name="height" value="<?php $_POST['height'] ?>">
    <input type="submit" value="submit">
  </form>

</body>
</html>