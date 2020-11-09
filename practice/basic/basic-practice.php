<?php

$fruits = [1, 2, 3];
$add_nums = [4, 5, 6, 7, 8, 9, 10];
$arrays = [];

foreach($add_nums as $num) {
  while(true) {
    if(!in_array($num, $array)){
      array_push($array, $num);
      array_push($fruits, $num);
    break;
    }
  }
}



array_push($fruits, $tmp);
var_dump($fruits);


function is_continuous_array($array)
{
    $range = range(min($array), min($array) + count($array) - 2);
    var_dump($range);
    return $range[count($range)] = ' ';
}

// var_dump(is_continuous_array([8, 6, 10, 7]));

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