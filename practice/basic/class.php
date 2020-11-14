<?php

$height = $_POST['height'];
$weight = $_POST['weight'];
$pressure = $_POST['pressure'];

class Check {
  public $height = null;
  public $weight = null;
  public $pressure = null;

  function __construct($a, $b, $c)
  {
    $this->height = $a;
    $this->weight = $b;
    $this->pressure = $c;
  }

  public function show_data(){
    echo $this->height;
    echo '<br>';
    echo $this->weight;
    echo '<br>';
    echo $this->pressure;
    echo '<br>';
  }

  public function show_bmi(){
    $bmi = $this->weight / ( ($this->height/100)^2 );
    echo $bmi;
    echo '<br>';
  }

}

class Blood extends Check {
  function blood_check(){
    $judge = $this->pressure > 100? 'high' : 'low';
    echo $judge;
    echo '<br>';
  }
}

$blood = new Blood($height, $weight, $pressure);
$blood->blood_check();


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