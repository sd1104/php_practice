<?php

$children = [
  ['id' => 1,'name' => '横田 早葉子', 'wish' => 'a', 'min' => 1, 'max' => 7, 'proposal' => null ],
  ['id' => 2,'name' => '横田 早葉子', 'wish' => 'a', 'min' => 1, 'max' => 7, 'proposal' => null ],
  ['id' => 3,'name' => '横田 早葉子', 'wish' => 'a', 'min' => 1, 'max' => 7, 'proposal' => null ],
  ['id' => 4,'name' => '横田 早葉子', 'wish' => 'a', 'min' => 1, 'max' => 7, 'proposal' => null ],
  ['id' => 4,'name' => '横田 早葉子', 'wish' => 'a', 'min' => 1, 'max' => 7, 'proposal' => null ],
  ['id' => 4,'name' => '横田 早葉子', 'wish' => 'a', 'min' => 1, 'max' => 7, 'proposal' => null ],
  ['id' => 5,'name' => '横田 早葉子', 'wish' => 'b', 'min' => 8, 'max' => 14, 'proposal' => null ],
  ['id' => 6,'name' => '横田 早葉子', 'wish' => 'b', 'min' => 8, 'max' => 14, 'proposal' => null ],
  ['id' => 7,'name' => '横田 早葉子', 'wish' => 'b', 'min' => 8, 'max' => 14, 'proposal' => null ],
  ['id' => 8,'name' => '横田 早葉子', 'wish' => 'c', 'min' => 15, 'max' => 21, 'proposal' => null ],
  ['id' => 9,'name' => '横田 早葉子', 'wish' => 'c', 'min' => 15, 'max' => 21, 'proposal' => null ],
  ['id' => 10,'name' => '横田 早葉子', 'wish' => 'c', 'min' => 15, 'max' => 21, 'proposal' => null ],
  ['id' => 11,'name' => '横田 早葉子', 'wish' => 'c', 'min' => 15, 'max' => 21, 'proposal' => null ],
  ['id' => 12,'name' => '横田 早葉子', 'wish' => 'c', 'min' => 15, 'max' => 21, 'proposal' => null ],
];

// foreach($children as $child) {
//   echo $child['id'] . ',';
// }

// $wish_category = [
//   'a' => [ 'min' => 1, 'max' => 7 ],
//   'b' => [ 'min' => 8, 'max' => 14 ],
//   'c' => [ 'min' => 15, 'max' => 21 ],
//   'd' => [ 'min' => 22, 'max' => 28 ],
//   'e' => [ 'min' => 29, 'max' => 35 ],
//   'f' => [ 'min' => 36, 'max' => 42 ],
//   'g' => [ 'min' => 43, 'max' => 49 ],
//   'h' => [ 'min' => 50, 'max' => 56 ],
//   'i' => [ 'min' => 56, 'max' => 63 ],
//   'j' => [ 'min' => 1, 'max' => 21 ],
//   'k' => [ 'min' => 22, 'max' => 42 ],
//   'l' => [ 'min' => 43, 'max' => 63 ],
//   'm' => [ 'min' => 1, 'max' => 14 ],
//   'n' => [ 'min' => 7, 'max' => 21 ],
//   'o' => [ 'min' => 22, 'max' => 35 ],
//   'p' => [ 'min' => 28, 'max' => 42 ],
//   'q' => [ 'min' => 43, 'max' => 56 ],
//   'r' => [ 'min' => 57, 'max' => 63 ],
//   's' => [ 'min' => 1, 'max' => 63 ]
// ];

// function make_proposal($children) {
//   $rands = [];
//   foreach($children as $child) {
//     $min = $child['min'];
//     $max = $child['max'];
//     for($i = $min; $i < $max; $i++) {
//       while(true) {
//         $tmp = rand($min, $max);
//         if( !in_array($tmp, $rands)) {
//           $child['proposal'] = $tmp;
//         break;
//         }
//       }
//     }
//     array_push($rands, $child['proposal']);
//   }
// }
// function make_proposal($children) {
//   $wish_nums = [];
//   foreach($children as $child) {
//     $min = $child['min'];
//     while(true) {
//       if(!in_array($min, $wish_nums)){
//         array_push($wish_nums, $min);
//       break;
//       } else {
//         $min++;
//       }
//     }
//     $child['proposal'] = $min;
//     $count = 0;
//     for($i = 0; $i < count($wish_nums); $i++) {
//       $minus = $wish_nums[($i+1)] - $wish_nums[($i)];
//       if( $minus === 1 ) {
//         $count++;
//       } else {
//       break;
//       }
//     }
//     if($count%3 === 0 && $count !== 0) {
//       $count = 0;
//     }
//    echo $child['proposal'] .',';
//     echo '<br>';
//   }
//   // return $children;
// }
// make_proposal($children);
function make_proposal($children) {
  $wish_nums = [];
  $proposals = [];
  foreach($children as $child) {


    $min = $child['min'];
    while(true) {
      if(!in_array($min, $wish_nums)){
        array_push($wish_nums, $min);
      break;
      } else {
        $min++;
      }
    }
    $child['proposal'] = $min;

    // echo '最初のwish_numsは、';
    // var_dump($wish_nums);
    // echo '<br>';
    $count = 0;
    for($i=0; $i<count($wish_nums); $i++) {
      if(count($wish_nums)<3) {
        // echo '最初のif通過';
        // echo '<br>';
      break;
      }
      $array1 = array_slice($wish_nums, (-4-$i), 4);
      $array2 = range((end($wish_nums)-3), end($wish_nums), 1);
      if($array1 === $array2) {
        // echo 'count++通過';
        // echo '<br>';
        $count=4;
      }
      if($count === 4) {
        $child['proposal'] = ($min+1);
        $wish_nums[] = $child['proposal'];
        $wish_nums[] = 0;
        $count = 0;
        // echo 'count==4通過';
        // echo '<br>';
      break;
      }
    }
    // echo '保存は';
    // echo $child['proposal'];
    // echo '<br>';
    // echo '<br>';

    $proposals[] = $child;
  }
  return $proposals;
}
// make_proposal($children);
// echo '<pre>';
// var_dump(make_proposal($children));
// echo '</pre>';
foreach(make_proposal(($children)) as $proposal) {
  echo $proposal['proposal'];
  echo '<br>';
}


// function min_time($data) {
//   if (empty($data['wish']) ) {
//     $children['min'] = $data['min'];
//     return $children['min'];
//   }
//   if (!empty($data['wish']) ) {
//     $array_first_value = array_shift($data['wish']);
//     return $array_first_value;
//   }
// }

// function max_time($data) {
//   if (empty($data['wish']) ) {
//     $children['max'] = $data['max'];
//     return $children['max'];
//   }
//   if (!empty($data['wish']) ) {
//     $array_max_value = end($data['wish']);
//     return $array_max_value;
//   }
// }

// $children = [
//   [
//     'id' => 1,
//     'name' => '横田 早葉子',
//     'wish' => 'a',
//     'min' => min_time($data['min']),
//     'max' => max_time($data['max']),
//     'proposal' => null,
//   ]
// ];

// $kids = [
//   '嶋田 一世',
//   '松尾 哲昭',
//   '山本 貢太郎',
//   '佐野 厚史',
//   '岩瀬 忠和',
//   '川野 葉子',
//   '笠原 純太',
//   '倉田 美海',
//   '阿部 理恵子',
//   '中西 睦男',
//   '村井 幸郎',
//   '茂木 初美',
//   '小山 秀司',
//   '関 知生',
//   '森山 保行',
//   '西山 純太',
//   '菊池 知恵',
//   '望月 勇美',
//   '出口 由治',
//   '関口 朋美',
//   '古田 麻紀',
//   '豊田 省次郎',
//   '谷川 伸江',
//   '石黒 忠博',
//   '笠井 定行',
//   '藤本 隆次',
//   '高田 照也',
//   '田原 聡',
//   '坂本 貴浩'
// ];

// $a = [1,2,3,4,5,6,7];
// $b = [8,9,10,11,12,13,14];
// $c = [15,16,17,18,19,20,21];
// $d = [22,23,24,25,26,27,28];
// $e = [29,30,31,32,33,34,35];
// $f = [36,37,38,39,40,41,42];
// $g = [43,44,45,46,47,48,49];
// $h = [50,51,52,53,54,55,56];
// $i = [57,58,59,60,61,62,63];
// $j = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21];
// $k = [22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42];
// $l = [43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63];
// $m = [1,2,3,4,5,6,7,8,9,10,11,12,13,14];
// $n = [8,9,10,11,12,13,14,15,16,17,18,19,20,21];
// $o = [22,23,24,25,26,27,28,29,30,31,32,33,34,35];
// $p = [29,30,31,32,33,34,35,36,37,38,39,40,41,42];
// $q = [43,44,45,46,47,48,49,50,51,52,53,54,55,56];
// $r = [50,51,52,53,54,55,56,57,58,59,60,61,62,63];
// $s = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63];



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
</body>
</html>