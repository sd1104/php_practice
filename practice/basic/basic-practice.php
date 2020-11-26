<?php
$fruits = ['apple', 'orange', 'grape'];
$fruits[] = 'melon';
$fruits[0] = 'pine';
array_push($fruits, 'lemon');
array_unshift($fruits, 'melon');
array_pop($fruits);
array_shift($fruits);

$boys = [
  'john' => [
    'age' => 21,
    'hobby' => 'fishing'
  ],
  'mike' => [
    'age' => 22,
    'hobby' => 'singing'
  ]
];

// foreach($fruits as $index => $fruit) {
//   echo $index .' ' .$fruit .' ';
// }

$num = 0;
for($i=0; $i<10; $i++) {
  $num = ($i+1) + ($i+2);
}
echo $num;

?>
