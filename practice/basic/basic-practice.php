<?php

$fruits = ['apple', 'oragen', 'grape'];
$fruits[2] = 'melon';
$fruits[] = 'peach';
array_unshift($fruits, 'lemon');
array_push($fruits, 'pine');
// array_shift($fruits);
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

  // foreach($boys as $key1 => $name) {
  //   foreach($name as $key2 => $value) {
  //     echo $key1 .';' .$key2 .'is' .$value;
  //     echo '<br>';
  //   }
  // }


  // $i = 0;
  // while($i<10) {
  //   $num = ($i+2) + ($i+1);
  //   $i++;
  // }
  // echo $num;

  if($fruits[0] === 'apple') {
    echo 'Apple';
  } else if($fruits[1] === 'orange') {
    echo 'Orange';
  } else {
    echo 'Others';
  }






?>