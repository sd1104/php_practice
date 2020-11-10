<?php

$first_day = '12/1';
$days = 3;
$start_time = '13:30';

// 連続○回コマが続いたら１コマ休憩を入れる
$span_point = 3;

$wish_range = [
  'a' => [ 'min' => 1, 'max' => 7 ],
  'b' => [ 'min' => 8, 'max' => 14 ],
  'c' => [ 'min' => 15, 'max' => 21 ],
  'd' => [ 'min' => 22, 'max' => 28 ],
  'e' => [ 'min' => 29, 'max' => 35 ],
  'f' => [ 'min' => 36, 'max' => 42 ],
  'g' => [ 'min' => 43, 'max' => 49 ],
  'h' => [ 'min' => 50, 'max' => 56 ],
  'i' => [ 'min' => 56, 'max' => 63 ],
  'j' => [ 'min' => 1, 'max' => 21 ],
  'k' => [ 'min' => 22, 'max' => 42 ],
  'l' => [ 'min' => 43, 'max' => 63 ],
  'm' => [ 'min' => 1, 'max' => 14 ],
  'n' => [ 'min' => 7, 'max' => 21 ],
  'o' => [ 'min' => 22, 'max' => 35 ],
  'p' => [ 'min' => 28, 'max' => 42 ],
  'q' => [ 'min' => 43, 'max' => 56 ],
  'r' => [ 'min' => 57, 'max' => 63 ],
  's' => [ 'min' => 1, 'max' => 63 ]
];

// 希望テーブル
$children = [
  ['id' => 1,'name' => '秋元 元信', 'wish' => 'a', 'min' => 1, 'max' => 7, 'proposal' => null ],
  ['id' => 2,'name' => '植田 美次', 'wish' => 'a', 'min' => 1, 'max' => 7, 'proposal' => null ],
  ['id' => 3,'name' => '上田 美次', 'wish' => 'a', 'min' => 1, 'max' => 7, 'proposal' => null ],
  ['id' => 4,'name' => '大平 仁美', 'wish' => 'a', 'min' => 1, 'max' => 7, 'proposal' => null ],
  ['id' => 5,'name' => '奥野 周', 'wish' => 'a', 'min' => 1, 'max' => 7, 'proposal' => null ],
  ['id' => 6,'name' => '小野寺 真琴', 'wish' => 'a', 'min' => 1, 'max' => 7, 'proposal' => null ],
  ['id' => 7,'name' => '北川 友良', 'wish' => 'b', 'min' => 8, 'max' => 14, 'proposal' => null ],
  ['id' => 8,'name' => '工藤 隆哉', 'wish' => 'b', 'min' => 8, 'max' => 14, 'proposal' => null ],
  ['id' => 9,'name' => '小泉 絵里', 'wish' => 'b', 'min' => 8, 'max' => 14, 'proposal' => null ],
  ['id' => 10,'name' => '佐野 宏幸', 'wish' => 'b', 'min' => 8, 'max' => 14, 'proposal' => null ],
  ['id' => 11,'name' => '白井 正征', 'wish' => 'b', 'min' => 8, 'max' => 14, 'proposal' => null ],
  ['id' => 12,'name' => '神谷 洵子', 'wish' => 'c', 'min' => 15, 'max' => 21, 'proposal' => null ],
  ['id' => 13,'name' => '関口 信也', 'wish' => 'c', 'min' => 15, 'max' => 21, 'proposal' => null ],
  ['id' => 14,'name' => '高野 由水', 'wish' => 'c', 'min' => 15, 'max' => 21, 'proposal' => null ],
  ['id' => 15,'name' => '高橋 斎', 'wish' => 'c', 'min' => 15, 'max' => 21, 'proposal' => null ],
  ['id' => 16,'name' => '谷川 歩', 'wish' => 'c', 'min' => 15, 'max' => 21, 'proposal' => null ],
  ['id' => 17,'name' => '田畑 譲介', 'wish' => 'd', 'min' => 22, 'max' => 28, 'proposal' => null ],
  ['id' => 18,'name' => '堤 菊江', 'wish' => 'd', 'min' => 22, 'max' => 28, 'proposal' => null ],
  ['id' => 19,'name' => '鶴田 幸美', 'wish' => 'd', 'min' => 22, 'max' => 28, 'proposal' => null ],
  ['id' => 20,'name' => '富田 貞郎', 'wish' => 'e', 'min' => 29, 'max' => 35, 'proposal' => null ],
  ['id' => 21,'name' => '中山 久哉', 'wish' => 'e', 'min' => 29, 'max' => 35, 'proposal' => null ],
  ['id' => 22,'name' => '原 哲子', 'wish' => 'e', 'min' => 29, 'max' => 35, 'proposal' => null ],
  ['id' => 23,'name' => '原 陽子', 'wish' => 'f', 'min' => 36, 'max' => 42, 'proposal' => null ],
  ['id' => 24,'name' => '星野 虎之助', 'wish' => 'f', 'min' => 36, 'max' => 42, 'proposal' => null ],
  ['id' => 25,'name' => '堀江 麻樹', 'wish' => 'g', 'min' => 43, 'max' => 49, 'proposal' => null ],
  ['id' => 26,'name' => '横井 茂一', 'wish' => 'k', 'min' => 22, 'max' => 42, 'proposal' => null ],
  ['id' => 27,'name' => '若林 真希', 'wish' => 'l', 'min' => 43, 'max' => 63, 'proposal' => null ],
  ['id' => 28,'name' => '若林 真知子', 'wish' => '', 'min' => 60, 'max' => 63, 'proposal' => null ]
];

?>