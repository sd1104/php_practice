<?php

$fruits = ['apple', 'orange', 'grape'];
$fruits[1] = 'melon';
$fruits[] = 'peach';
var_dump($fruits);


$boy = [
  'name' => 'John',
  'age' => 20,
  'hobby' => 'fishing'
];
echo $boy['hobby'];


foreach($fruits as $key => $fruit) {
  echo $fruit;
};
foreach($boy as $key => $value) {
  echo $key . ':' . $value;
};

echo '<br>';

function make_plus() {
  for($i = 0; $i < 10; $i++) {
    $a = rand(1,9);
    $b = rand(1,9);
    echo $a . '+' . $b;
    echo '<br>';
  }
}
function make_plus2() {
  $count = 0;
  while($count < 10) {
    $a = rand(1,9);
    $b = rand(1,9);
    echo $a . '+' . $b;
    echo '<br>';
    $count += 1;
  }
}

make_plus2();

$height = 180;
$weight = 100;
$pressure = 120;
if($height >= 180) {
  echo 'tall';
  echo '<br>';
} else if ($height <= 100) {
  echo 'small';
  echo '<br>';
} else if ($height > 100 && $height < 180) {
  echo 'middle';
  echo '<br>';
} else {
  return '';
}
switch($height) {
  case($height >= 180) :
    echo 'tall';
    echo '<br>';
  break;
  case($height <= 100) :
    echo 'small';
    echo '<br>';
  break;
  case($height > 100 && $height < 180) :
    echo 'middle';
    echo '<br>';
  break;
  default:
    return '';
  break;
}
$judge = $height > 180? 'tall' : 'Small';
echo $judge;


class Assesment {
  public $height = null;
  public $weight = null;
  public $pressure = null;

  function __construct($a, $b, $c)
  {
    $this->height = $a;
    $this->weight = $b;
    $this->pressure = $c;
  }

  public function show_data() {
    echo $this->height;
    echo '<br>';
    echo $this->weight;
    echo '<br>';
    echo $this->pressure;
    echo '<br>';
  }

  public function show_bmi() {
    $bmi = $this->weight / ( ($this->height/100)^2 );
    echo $bmi;
    echo '<br>';
  }
}

$asses = new Assesment($height, $weight, $pressure);
$asses->show_data();
$asses->show_bmi();


?>
