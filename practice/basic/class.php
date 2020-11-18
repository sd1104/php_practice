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
}

class Blood extends Check {

}

class Cole extends Check {
  public $colestrole = null;

  function __construct($colestrole)
  {
    $this->colestrole = $colestrole;
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