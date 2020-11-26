<?php

// // 問題A
// // $array = [
// //   'apple',
// //   'orange',
// //   'grape'
// // ];

// // $array[1] = 'melon';
// // $array[] = 'peach';

// // echo '<pre>';
// //   var_dump($array);
// // echo '<pre>';

// // echo $array[0];


// // 問題B
// // $boy = [
// //   'name' => 'John',
// //   'age' => 20,
// //   'hobby' => 'fishing'
// // ];
// // $name_keys = array_keys($boy);

// // echo '<pre>';
// //   var_dump($boy);
// // echo '<pre>';
// // echo '<br>';
// // echo $name_keys[0] . "\n" . 'is' . '' . $boy['name'] .'' . 'and his' . '' . $name_keys[2] . '' . 'is' . '' . $boy['hobby'];
// // echo '<br>';
// // echo '<pre>';
// //   var_dump($name_keys);
// // echo '<pre>';


// // 問題C
// // foreach($boy as $k => $v) {
// //   echo $k . '&nbsp' . 'is' . '&nbsp' ;
// //   echo $v . '.' . '&nbsp' ;
// // };

// // function make_minus() {
// //   $count = 0;
// //   while($count < 10) {
// //     $A = rand(1, 99);
// //     $B = rand(1, 99);
// //     while($A < $B ) {
// //       $A = rand(1, 99);
// //       $B = rand(1, 99);
// //     }
// //     echo $A . '&nbsp' . '-' . '&nbsp' . $B ;
// //     echo '<br>';
// //     $count++;
// //   }
// // };
// // make_minus();

// // function make_minus() {
// //   for($i = 0; $i < 10; $i++) {
// //     $A = rand(1, 99);
// //     $B = rand(1, 99);
// //     while($A < $B ) {
// //       $A = rand(1, 99);
// //       $B = rand(1, 99);
// //     }
// //     echo $A . '&nbsp' . '-' . '&nbsp' . $B ;
// //     echo '<br>';
// //   }
// // };
// // make_minus();

// // 問題D

// $height = $_POST['height'];

// // if($height < 100 && $height > 0) {
// //   echo 'small';
// // } else if($height > 180) {
// //  echo 'tall';
// // } else if ($height <=180 && $height >=100) {
// //   echo 'middle';
// // } else {
// //   echo 'value is illegal.';
// // }

// // if($height < 100 && $height > 0) {
// //   echo 'small';
// // }
// // if($height > 180) {
// //  echo 'tall';
// // }
// // if ($height <=180 && $height >=100) {
// //   echo 'middle';
// // }
// // if ($height <= 0) {
// //   echo 'value is illegal.';
// // }

// // switch($height) {
// //   case $height < 100 && $height > 0:
// //     echo 'small';
// //   break;
// //   case $height >= 100 && $height <= 180:
// //     echo 'middle';
// //   break;
// //   case $height > 180:
// //     echo 'tall';
// //     break;
// //   default:
// //     echo 'value is illegal.';
// //   break;
// // }

// $judge = $height >= 120 ? 'OK' : 'Not OK';
// echo $judge;


// 問題E

class Assesment {
  public $heighth = null;
  public $weight = '';
  public $pressure = '';

  function __construct($heighth, $weight, $pressure) {
    $this->heighth = $heighth;
    $this->weight = $weight;
    $this->pressure = $pressure;
  }

  public function show_data() {
    echo 'heighth is ' . $this->heighth;
    echo '<br>';
    echo 'weight is ' . $this->weight;
    echo '<br>';
    echo 'pressure is ' . $this->pressure;
    echo '<br>';
  }

  public function show_bmi() {
    echo ( $this->weight / ( ($this->heighth/100) * ($this->heighth/100) ) );
  }
}

class Blood extends Assesment {
  public function show_blood_data() {
    if($this->pressure < 800 && $this->pressure> 0) {
      echo 'low';
      echo '<br>';
    }
    if($this->pressure > 1500) {
      echo 'high';
      echo '<br>';
    }
    if ($this->pressure <=800 && $this->pressure >=1500) {
      echo 'middle';
      echo '<br>';
    }
    if ($this->pressure <= 0) {
      echo 'value is illegal.';
      echo '<br>';
    }
  }
}

class Colestrole extends Assesment {
  public function show_colestrole($data) {
    echo 'your colestrole value is ';
    echo $data;
    echo '<br>';
  }

  public function judge_colestrole($data) {
    if($data < 150 && $data > 0) {
      echo 'low';
      echo '<br>';
    }
    if($data > 200) {
      echo 'high';
      echo '<br>';
    }
    if ($data <=150 && $data >=200) {
      echo 'middle';
      echo '<br>';
    }
    if ($data <= 0) {
      echo 'value is illegal.';
      echo '<br>';
    }
  }
}


$heighth = $_POST['height'];
$weight = $_POST['weight'];
$pressure = $_POST['pressure'];


$assess = new Assesment($heighth, $weight, $pressure);
echo 'assesment parts';
echo '<br>';
echo 'Your Data is below.';
echo '<br>';
$assess->show_data();
echo 'bmi is ';
$assess->show_bmi();
echo '<br>';
echo '<br>';


$blood = new Blood($heighth, $weight, $pressure);
echo 'blood pressure parts';
echo '<br>';
echo 'blood_pressure is ';
$blood->show_blood_data();
// echo 'Your Data is below.';
// echo '<br>';
// $blood->show_data();
// echo 'bmi is ';
// $blood->show_bmi();
echo '<br>';
echo '<br>';


$colesterole = new Colestrole($heighth, $weight, $pressure);
echo 'colestrole parts';
echo '<br>';
$colesterole_value = $_POST['colestrole'];
$colesterole->show_colestrole($colesterole_value);

echo 'Your Colestrole is ';
$colesterole->judge_colestrole($colesterole_value);
// echo 'Your Data is below.';
// echo '<br>';
// $colesterole->show_data();
// echo 'bmi is ';
// $colesterole->show_bmi();
echo '<br>';
echo '<br>';

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