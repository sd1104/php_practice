<?php

$fruits = ['apple', 'oragen', 'grape'];
$fruits[1] = 'melon';
$fruits[] = 'peach';
array_unshift($fruits, 'lemon');
array_push($fruits, 'pine');
array_shift($fruits);
array_pop($fruits);

$boys = [
  'John' => [
    'age' => 20,
    'hobby' => 'fishing'
  ],
  'Mike' => [
    'age' => 21,
    'hobby' => 'singing'
  ]
  ];

  // foreach($fruits as $index => $fruit) {
  //   echo $index .',' .$fruit;
  //   echo '<br>';
  // }

  foreach($boys as $key1 => $name) {
    foreach($name as $key2 => $value) {
      echo $key1 .';' .$key2 .'is' .$value;
      echo '<br>';
    }
  }
?>