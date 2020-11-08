<?php
require 'data.php';
$kids = [
  'nameA' => [
    'wishA' => [
      $first_num => array_shift($a),
      $last_num => end($a)
    ]
  ]
];







$array_first_value = array_shift($a);
$array_last_value = end($a);

$num = rand($array_first_value, $array_last_value);
echo $num;




?>