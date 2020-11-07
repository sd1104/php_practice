<?php
$height = $_POST['height'];
$weight = $_POST['weight'];
$b_pressure = $_POST['pressure'];
$colesterole_value = $_POST['colestrole'];

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

// if(empty($height)) {
//   echo '';
// } else if($height <= 100){
//   echo '1';
// } else if ($height > 100 && $height < 180) {
//   echo '2';
// } else if ($height >= 180){
//   echo '3';
// }
// if ($height >= 180){
//   echo '3';
// } else if($height >0 && $height <= 100){
//   echo '1';
// } else if ($height > 100 && $height < 180) {
//   echo '2';
// } else {
//   echo '';
// }
// var_dump($height);
// switch($height){
//   case(empty($height) || $height == NULL):
//     echo 'irregular';
//   break;
//   case($height >= 180):
//     echo 'c3';
//   break;
//   case($height >0 && $height <= 100):
//     echo 'c1';
//   break;
//   case($height > 100 && $height < 180):
//     echo 'c2';
//   break;
//   default:
//     echo 'minus';
//   break;
// }

// if ($height == null) {
//   echo '';
// } else {
//   $judge_height = $height > 150? 'upper150' : 'under150';
//   echo $judge_height;
// }

class Check {
  public $height = null;
  public $weight = null;
  public $pressure = null;

  function  __construct($a,$b,$c)
  {
    $this->height = $a;
    $this->weight = $b;
    $this->pressure = $c;
  }

  public function show() {
    echo $this->height;
    echo '<br>';
    echo $this->weight;
    echo '<br>';
    echo $this->pressure;
    echo '<br>';
  }

  public function show_bmi() {
    echo $this->weight / ( ($this->height/100)^2);
    echo '<br>';
  }
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