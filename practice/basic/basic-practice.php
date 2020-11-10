<?php

$fruits = [1, 2, 3];
$add_nums = [4, 5, 6, 7, 8, 9, 10];
$arrays = [];


$array = array_slice($add_nums, -3, 3);
var_dump($array);

// foreach($add_nums as $num) {
//   while(true) {
//     if(!in_array($num, $array)){
//       array_push($array, $num);
//       array_push($fruits, $num);
//     break;
//     }
//   }
// }



// array_push($fruits, $tmp);
// var_dump($fruits);


// function is_continuous_array($array)
// {
//     $range = range(min($array), min($array) + count($array) - 2);
//     var_dump($range);
//     return $range[count($range)] = ' ';
// }

// var_dump(is_continuous_array([8, 6, 10, 7]));

?>