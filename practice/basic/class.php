<?php

$height = $_POST['height'];
$weight = $_POST['weight'];
$pressure = $_POST['pressure'];

class Check {
  public $height = null;
  public $weight = null;
  public $pressure = null;

  function __construct($height, $weight, $pressure)
  {
    $this->height = $height;
    $this->weight = $weight;
    $this->pressure = $pressure;
  }

  public function show_data() {
    if(!$this->height || !$this->weight || !$this->pressure) return;
    echo 'Your height is ';
    echo $this->height;
    echo '<br>';
    echo 'Your weight is ';
    echo '<br>';
    echo $this->weight;
    echo '<br>';
    echo 'Your pressure is ';
    echo $this->pressure;
    echo '<br>';
  }

  public function show_bmi() {
    if(!$this->height || !$this->weight) return;
    $bmi = $this->weight / (($this->height/100)^2);
    echo 'bmi is ';
    echo $bmi;
    echo '<br>';
  }
}

class Blood extends Check {
  public function blood_check() {
    if(!$this->pressure) return;
    echo 'Your blood pressure value is ';
    if($this->pressure > 120) {
      echo 'Hight';
      echo '<br>';
    } else {
      echo 'Hight';
      echo '<br>';
    }
  }
}

class Cole extends Check {
  public $colestrole = null;

  function __construct($colestrole)
  {
    $this->colestrole = $colestrole;
  }

  public function cole_check(){
    if(!$this->colestrole) return;
    echo 'Your colestrole value is ';
    if($this->colestrole > 200) {
      echo 'Hight';
      echo '<br>';
    }  else {
      echo 'Hight';
      echo '<br>';
    }
  }
}

$mike = new Cole($height, $weight, $pressure, $colestrole);
$john = new Blood($height, $weight, $pressure);
$john->show_data();
$john->show_bmi();
$john->blood_check();
$mike->show_data();
$mike->show_bmi();
$mike->cole_check();



?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>basic practice</title>
</head>
<body>

  <form method="POST" action="class.php">
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