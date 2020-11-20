<?php

// $fruits = ['apple', 'orange', 'grape'];
// // $fruits[0] = 'melon';

// array_unshift($fruits, 'pineapple');
// array_shift($fruits);
// array_push($fruits, 'peach');
// array_pop($fruits);


// $boys = [
//   'john' => [
//     'age' => 20,
//     'hobby' => 'fishing'
//   ],
//   'mike' => [
//     'age' => 21,
//     'hobby' => 'singing'
//   ]
//   ];

// foreach($fruits as $f) {
//   echo $f;
//   echo '<br>';
// };

// foreach($boys as $name => $info) {
//   foreach($info as $key => $i) {
//     echo $name;
//     echo '<br>';
//     echo $info;
//     echo '<br>';
//     echo $key;
//     echo '<br>';
//     echo $i;
//     echo '<br>';
//   }
// }

$num = 0;
for($i=0; $i<10; $i++) {
  $num = ($i+1) + ($i+2);
};
echo $num;
?>