<?php

// // 問題A
// // $array = [
// //   'apple',
// //   'orange',
// //   'grape'
// // ];

// // $array[1] = 'melon';
// // $array[] = 'peach';

// // echo '<pre>';
// //   var_dump($array);
// // echo '<pre>';

// // echo $array[0];


// // 問題B
// // $boy = [
// //   'name' => 'John',
// //   'age' => 20,
// //   'hobby' => 'fishing'
// // ];
// // $name_keys = array_keys($boy);

// // echo '<pre>';
// //   var_dump($boy);
// // echo '<pre>';
// // echo '<br>';
// // echo $name_keys[0] . "\n" . 'is' . '' . $boy['name'] .'' . 'and his' . '' . $name_keys[2] . '' . 'is' . '' . $boy['hobby'];
// // echo '<br>';
// // echo '<pre>';
// //   var_dump($name_keys);
// // echo '<pre>';


// // 問題C
// // foreach($boy as $k => $v) {
// //   echo $k . '&nbsp' . 'is' . '&nbsp' ;
// //   echo $v . '.' . '&nbsp' ;
// // };

// // function make_minus() {
// //   $count = 0;
// //   while($count < 10) {
// //     $A = rand(1, 99);
// //     $B = rand(1, 99);
// //     while($A < $B ) {
// //       $A = rand(1, 99);
// //       $B = rand(1, 99);
// //     }
// //     echo $A . '&nbsp' . '-' . '&nbsp' . $B ;
// //     echo '<br>';
// //     $count++;
// //   }
// // };
// // make_minus();

// // function make_minus() {
// //   for($i = 0; $i < 10; $i++) {
// //     $A = rand(1, 99);
// //     $B = rand(1, 99);
// //     while($A < $B ) {
// //       $A = rand(1, 99);
// //       $B = rand(1, 99);
// //     }
// //     echo $A . '&nbsp' . '-' . '&nbsp' . $B ;
// //     echo '<br>';
// //   }
// // };
// // make_minus();

// // 問題D

// $height = $_POST['height'];

// // if($height < 100 && $height > 0) {
// //   echo 'small';
// // } else if($height > 180) {
// //  echo 'tall';
// // } else if ($height <=180 && $height >=100) {
// //   echo 'middle';
// // } else {
// //   echo 'value is illegal.';
// // }

// // if($height < 100 && $height > 0) {
// //   echo 'small';
// // }
// // if($height > 180) {
// //  echo 'tall';
// // }
// // if ($height <=180 && $height >=100) {
// //   echo 'middle';
// // }
// // if ($height <= 0) {
// //   echo 'value is illegal.';
// // }

// // switch($height) {
// //   case $height < 100 && $height > 0:
// //     echo 'small';
// //   break;
// //   case $height >= 100 && $height <= 180:
// //     echo 'middle';
// //   break;
// //   case $height > 180:
// //     echo 'tall';
// //     break;
// //   default:
// //     echo 'value is illegal.';
// //   break;
// // }

// $judge = $height >= 120 ? 'OK' : 'Not OK';
// echo $judge;


// 問題E

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>basic practice</title>
</head>
<body>

  <form method="POST" action="basic-practice.php">
    <input type="number" name="height" value="<?php $_POST['height'] ?>">
    <input type="submit" value="submit">
  </form>

</body>
</html>