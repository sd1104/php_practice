<?php
$height = $_POST['height'];
$weight = $_POST['weight'];
$pressure = $_POST['pressure'];
$colestrole = $_POST['colestrole'];

$fruits = ['apple', 'orange', 'grape'];

$boy = [
  'name' => 'John',
  'age' => 20,
  'hobby' => 'fishing'
];

foreach($fruits as $fruit) {
  echo $fruit;
  echo '<br>';
}

foreach($boy as $key => $value) {
  echo $key;
  echo ':';
  echo $value;
  echo '<br>';
}

// $num = 0;
// for($i=0; $i < 10; $i++) {
//   $num++;
//   echo $num .'+' .($num+1) .'=' .($num+$num+1);
//   echo '<br>';
// }






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