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


// function plus() {
//   for($i = 0; $i<10; $i++) {
//     $A = rand(1,9);
//     $B = rand(1,9);
//     echo '(' . ($i+1) . ')' . $A . '+' . $B;
//     echo '<br>';
//   }
// }
// function plus() {
//   $count = 0;
//   while($count<10) {
//     $A = rand(1,9);
//     $B = rand(1,9);
//     echo '(' . ($count+1) . ')' . $A . '+' . $B;
//     echo '<br>';
//     $count++;
//   }
// }
// plus();

$height = $_POST['height'];
$weight = $_POST['weight'];
$pressure = $_POST['pressure'];

// if ($height > 180) {
//   echo 'You are Tall.';
// } else if ($height >= 30 && $height < 100) {
//   echo 'You are Small, yet.';
// } else if ($height >= 100 && $height <= 180) {
//   echo 'You are middle.';
// } else {
//   echo '';
// }

// switch($height) {
//   case($height > 180):
//     echo 'You are  Tall.';
//   break;
//   case($height >= 30 && $height < 100):
//     echo 'You are small, yet.';
//   break;
//   case($height >= 100 && $height <= 180):
//     echo 'You are Middle.';
//   break;
//   default:
//     echo '';
//   break;
// }

// $judge = $height > 150? 'OK' : 'Not OK';
// echo $judge;

class Assesment {
  public $height = null;
  public $weight = null;
  public $pressure = null;

  function  __construct($height, $weight, $pressure)
  {
    $this->height = $height;
    $this->weight = $weight;
    $this->pressure = $pressure;
  }

  public function show_data() {
    if (empty($this->height)) return;
    echo 'Your height is ' . ' ' . $this->height . '.';
    echo '<br>';
    if (empty($this->weight)) return;
    echo 'Your weight is ' . ' ' . $this->weight . '.';
    echo '<br>';
    if (empty($this->pressure)) return;
    echo 'Your pressure is ' . ' ' . $this->pressure . '.';
    echo '<br>';
  }

  public function show_bmi() {
    if (empty($this->height) && empty($this->weight)) return;
    $bmi = ( $this->weight / ( ($this->height/100)^2 ) );
    echo 'Your bmi is ' . $bmi;
    echo '<br>';
  }
}

class Colestrole extends Assesment {
  public $colestrole = null;

  function  __construct($colestrole)
  {
    $this->colestrole = $colestrole;
  }

  public function judge_colestrole() {
    if (empty($this->colestrole)) return;
    $judge = $this->colestrole > 200? 'Your Colestrole is High.' : 'Your Colestrole is normal.';
    echo $judge;
  }
}

$assesment = new Assesment($height, $weight, $pressure);
echo $assesment->height;
echo '<br>';
$assesment->show_data();
$assesment->show_bmi();
echo '<br>';

$colest = new Colestrole($height, $weight, $pressure, $colestrole);
$colest->judge_colestrole();
echo '<br>';


echo '<pre>';
  var_dump($_POST);
  var_dump($assesment);
  var_dump($colest);
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