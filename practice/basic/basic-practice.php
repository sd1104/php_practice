<?php
// $heighth = $_POST['height'];
// $weight = $_POST['weight'];
// $b_pressure = $_POST['pressure'];
// $colesterole_value = $_POST['colestrole'];

// $fruits = ['apple', 'oraeg', 'grape'];
// $fruits[1] = 'melon';
// $fruits[] = 'peach';
// echo '<pre>';
//   var_dump($fruits);
//   var_dump($fruits[1]);
// echo '</pre>';

// $boy = [
//   'name' => 'John',
//   'age' => 20,
//   'hobby' => 'fishing'
// ];
// echo '<pre>';
//   var_dump($boy);
//   var_dump($boy['name']);
// echo '</pre>';

// foreach($fruits as $index => $fruit){
//   echo '<pre>';
//     var_dump($index);
//     var_dump($fruit);
//   echo '</pre>';
// }
// foreach($boy as $key => $value){
//   echo '<pre>';
//     var_dump($key);
//     var_dump($value);
//   echo '</pre>';
// }

// $boys = [
//   'John' => [
//     'age' => 20,
//     'hobby' => 'fishing'
//   ],
//   'Mike' => [
//     'age' => 30,
//     'hobby' => 'walking'
//   ],
//   'Dera' => [
//     'age' => 40,
//     'hobby' => 'running'
//   ]
// ];
// foreach($boys as $name_key => $boy){
//   foreach($boy as $key => $value){
//     echo '<pre>';
//       var_dump($name_key);
//       var_dump($key);
//       var_dump($value);
//     echo '</pre>';
//   }
// }

var_dump($height);

if(empty($height)) {
  echo '';
} else if($height <= 100){
  echo '1';
} else if ($height > 100 && $height < 180) {
  echo '2';
} else if ($height >= 180){
  echo '3';
}


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