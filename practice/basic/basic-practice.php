<?php

// $boys = [
//   'John' => [
//     'age' => 20,
//     'hobby' => 'fishing'
//   ],
//   'Mike' => [
//     'age' => 25,
//     'hobby' => 'dating'
//   ]
// ];

// foreach($boys as $boy) {
//   print_r($boy['age']);
//   echo '<br>';
// }

$num = 0;
// for($i=0; $i<10; $i++) {
//   $num = ($i+1) + ($i+2);
// }
$i = 0;
while($i<11) {
  $num = ($i) + ($i+1);
  $i++;
}
echo $num;

?>