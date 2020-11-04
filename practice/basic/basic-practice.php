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
$weight = $_POST['weight'];
$pressure = $_POST['pressure'];

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

class Assesment {
  public $height = null;
  public $weight = null;
  public $pressure = null;

  function __construct($height, $weight, $pressure) {
    $this->height = $height;
    $this->weight = $weight;
    $this->pressure = $pressure;
  }

  public function show_data() {
    echo 'height' . 'is' . $this->height;
    echo '<br>';
    echo 'weight' . 'is' . $this->weight;
    echo '<br>';
    echo 'pressure' . 'is' . $this->pressure;
    echo '<br>';
  }

  public function show_bmi() {
    echo 'bmi is ';
    echo $this->weight / (($this->height/100)^2);
    echo '<br>';
  }
}

class Blood extends Assesment {
  public function show_blood_status() {
      if ($this->pressure >= 150) {
    echo 'your blood pressure is high';
    echo '<br>';
  } else if($this->pressure <= 119) {
    echo 'your blood pressure is low';
    echo '<br>';
  } else if ($this->pressure < 150 && $this->pressure > 119) {
    echo 'your blood pressure is middle';
    echo '<br>';
  } else if($this->pressure == 0) {
    return;
  }
  }
}

$assesment = new Assesment($height, $weight, $pressure);
$assesment->show_data();
echo '<br>';
$assesment->show_bmi();
echo '<br>';

$blood = new Blood($height, $weight, $pressure);
$blood->show_blood_status();


echo '<pre>';
  var_dump($_POST);
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