<?php

// $fruits = ['apple', 'orange', 'grape'];

// $fruits[1] = 'melon';
// $fruits[] = 'peach';

// var_dump($fruits);
// echo $fruits[0];


// $boy = [
//   'name' => 'John',
//   'age' => 20,
//   'hobby' => 'fishing'
// ];

// echo $boy['hobby'];

// foreach($fruits as $fruit) {
//   echo $fruit;
//   echo '<br>';
// }
// foreach($fruits as $key => $fruit) {
//   echo $key . 'is' . $fruit;
//   echo '<br>';
// }
// foreach($boy as $value) {
//   echo $value;
//   echo '<br>';
// }
// foreach($boy as $key => $value) {
//   echo $key . 'is' . $value;
//   echo '<br>';
// }

$height = $_POST['height'];

if ($height > 180) {
  echo 'You are Tall.';
} else if ($height >= 30 && $height < 100) {
  echo 'You are Small, yet.';
} else if ($height >= 100 && $height <= 180) {
  echo 'You are middle.';
} else {
  echo '';
}

switch($height) {
  case($height > 180):
    echo 'You are  Tall.';
  break;
  case($height >= 30 && $height < 100):
    echo 'You are small, yet.';
  break;
  case($height >= 100 && $height <= 180):
    echo 'You are Middle.';
  break;
  default:
    echo '';
  break;
}

$judge = $height > 150? 'OK' : 'Not OK';
echo $judge;



echo '<pre>';
  var_dump($_POST);
  var_dump($height);
echo '</pre>';

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
    身長
    <input type="number" name="height" value="<?php $_POST['height'] ?>">
    <br>
    体重
    <input type="number" name="weight" value="<?php $_POST['weight'] ?>">
    <br>
    血圧
    <input type="number" name="pressure" value="<?php $_POST['pressure'] ?>">
    <br>
    コレステロール値
    <input type="number" name="colestrole" value="<?php $_POST['colestrole'] ?>">
    <br>
    <input type="submit" value="submit">
  </form>

</body>
</html>