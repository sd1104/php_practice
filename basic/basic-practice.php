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
echo $boy['hobby'];
echo '<br>';


foreach($fruits as $num => $fruit) {
  echo $num . ':' . $fruit;
  echo '<br>';
}

foreach($boy as $key => $value) {
  echo $key . ':' . $value;
  echo '<br>';
}

$height = $_POST['height'];

// if ($height >= 180) {
//   echo 'tall';
//   echo '<br>';
// } else if($height <= 100) {
//  echo 'small';
//  echo '<br>';
// } else if ($height >100 && $height < 180) {
//   echo 'middle';
//   echo '<br>';
// } else if ($height <= 0) {
//   return;
// }

// switch($height) {
//   case ($height >= 180):
//     echo 'tall';
//     echo '<br>';
//   break;
//   case ($height <= 100):
//     echo 'small';
//     echo '<br>';
//   break;
//   case ($height > 100 && $height < 180):
//     echo 'tall';
//     echo '<br>';
//   break;
//   default:
//     return;
//   break;
// }

// $high = $height >150 ? 'very tall' : 'very small';

// echo $high;

// echo '<pre>';
//   var_dump($_POST);
// echo '</pre>';

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
    <!-- 体重
    <input type="number" name="weight" value="<?php $_POST['weight'] ?>">
    <br>
    血圧
    <input type="number" name="b_pressure" value="<?php $_POST['b_pressure'] ?>">
    <br>
    コレステロール値
    <input type="number" name="colestrole" value="<?php $_POST['colestrole'] ?>"> -->
    <br>
    <input type="submit" value="submit">
  </form>

</body>
</html>