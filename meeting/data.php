<?php

$children = [
  ['id' => 1,'name' => '横田 早葉子', 'wish' => 'a', 'start' => 1, 'last' => 7, 'proposal' => null ],
  ['id' => 2,'name' => '横田 早葉子', 'wish' => 'a', 'start' => 1, 'last' => 7, 'proposal' => null ],
  ['id' => 3,'name' => '横田 早葉子', 'wish' => 'a', 'start' => 1, 'last' => 7, 'proposal' => null ],
  ['id' => 4,'name' => '横田 早葉子', 'wish' => 'a', 'start' => 1, 'last' => 7, 'proposal' => null ],
  ['id' => 5,'name' => '横田 早葉子', 'wish' => 'b', 'start' => 8, 'last' => 14, 'proposal' => null ],
  ['id' => 6,'name' => '横田 早葉子', 'wish' => 'b', 'start' => 8, 'last' => 14, 'proposal' => null ],
  ['id' => 7,'name' => '横田 早葉子', 'wish' => 'b', 'start' => 8, 'last' => 14, 'proposal' => null ],
  ['id' => 8,'name' => '横田 早葉子', 'wish' => 'c', 'start' => 15, 'last' => 21, 'proposal' => null ],
  ['id' => 9,'name' => '横田 早葉子', 'wish' => 'c', 'start' => 15, 'last' => 21, 'proposal' => null ],
  ['id' => 10,'name' => '横田 早葉子', 'wish' => 'c', 'start' => 15, 'last' => 21, 'proposal' => null ],
  ['id' => 11,'name' => '横田 早葉子', 'wish' => 'c', 'start' => 15, 'last' => 21, 'proposal' => null ],
  ['id' => 12,'name' => '横田 早葉子', 'wish' => 'c', 'start' => 15, 'last' => 21, 'proposal' => null ],
];

function make_proposal($children) {
  foreach($children as $child) {
    $start = $child['start'];
    $last = $child['last'];
    $child['proposal'] = rand($start, $last);
    echo '<pre>';
     var_dump($child);
    echo '</pre>';
  }
}

make_proposal($children, $wish_category);



// $wish_category = [
//   'a' => [ 'start' => 1, 'last' => 7 ],
//   'b' => [ 'start' => 8, 'last' => 14 ],
//   'c' => [ 'start' => 15, 'last' => 21 ],
//   'd' => [ 'start' => 22, 'last' => 28 ],
//   'e' => [ 'start' => 29, 'last' => 35 ],
//   'f' => [ 'start' => 36, 'last' => 42 ],
//   'g' => [ 'start' => 43, 'last' => 49 ],
//   'h' => [ 'start' => 50, 'last' => 56 ],
//   'i' => [ 'start' => 56, 'last' => 63 ],
//   'j' => [ 'start' => 1, 'last' => 21 ],
//   'k' => [ 'start' => 22, 'last' => 42 ],
//   'l' => [ 'start' => 43, 'last' => 63 ],
//   'm' => [ 'start' => 1, 'last' => 14 ],
//   'n' => [ 'start' => 7, 'last' => 21 ],
//   'o' => [ 'start' => 22, 'last' => 35 ],
//   'p' => [ 'start' => 28, 'last' => 42 ],
//   'q' => [ 'start' => 43, 'last' => 56 ],
//   'r' => [ 'start' => 57, 'last' => 63 ],
//   's' => [ 'start' => 1, 'last' => 63 ]
// ];

// function start_time($data) {
//   if (empty($data['wish']) ) {
//     $children['start'] = $data['start'];
//     return $children['start'];
//   }
//   if (!empty($data['wish']) ) {
//     $array_first_value = array_shift($data['wish']);
//     return $array_first_value;
//   }
// }

// function last_time($data) {
//   if (empty($data['wish']) ) {
//     $children['last'] = $data['last'];
//     return $children['last'];
//   }
//   if (!empty($data['wish']) ) {
//     $array_last_value = end($data['wish']);
//     return $array_last_value;
//   }
// }

// $children = [
//   [
//     'id' => 1,
//     'name' => '横田 早葉子',
//     'wish' => 'a',
//     'start' => start_time($data['start']),
//     'last' => last_time($data['last']),
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