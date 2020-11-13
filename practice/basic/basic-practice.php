<?php

$fruits = ['apple', 'orange', 'grape'];
$fruits[1] = 'melon';
$fruits[] = 'peach';
array_push($fruits, 'grapefruit');
array_pop($fruits);


var_dump($fruits);
echo '<br>';
print($fruits);

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