<?php

$boys = [
  'John' => [
    'age' => 20,
    'hobby' => 'fishing'
  ],
  'Mike' => [
    'age' => 25,
    'hobby' => 'dating'
  ]
];

foreach($boys as $boy) {
  print_r($boy['age']);
  echo '<br>';
}


?>