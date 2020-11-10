<?php

// 希望に基づいて提案日時を入力するための関数
function make_proposal($children, $span_point) {
  $wish_nums = [];
  $proposals = [];
  foreach($children as $child) {

    // 希望範囲内で早い時間から順につめてコマに入れる
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

    // 指定の連続回数コマが入力されたら休憩が１コマ入れる。
    for($i=0; $i<count($wish_nums); $i++) {
      if(count($wish_nums)<$span_point+1) {
      break;
      }
      $array1 = array_slice($wish_nums, -$span_point, $span_point);
      $array2 = range((end($wish_nums)-($span_point-1)), end($wish_nums), 1);
      if($array1 === $array2) {
        $child['proposal'] = ($min+1);
        $wish_nums[] = $child['proposal'];
        $wish_nums[] = 0;
      break;
      }
      // 日の開始日前には休憩を入れない。
      if(end($wish_nums) === 20 || end($wish_nums) === 41 || end($wish_nums) === 62) {
        $wish_nums[] = 0;
      break;
      } else {
      break;
      }
    }

    // 希望範囲外に提案日が入力されていないかをチェック
    if($child['proposal'] > $child['max']) {
      echo $child['id'] .'は希望外に日時が設定されています。';
      echo ($child['max']%7+6) .'か' .($child['max']%7+5) .'まで枠内の希望数を減らしてください。';
      echo '<br>';
    }

    $proposals[] = $child;
  }

  // 提案日の重複がないかをチェック
  $check_arrays = [];
  foreach($proposals as $proposal) {
    if(in_array($proposal['proposal'], $check_arrays)) {
      echo $proposal['id'] .'はいずれかと希望が重複しています。';
      echo '<br>';
    }
    $check_arrays[] = $proposal['proposal'];
  }
  return $proposals;
}
// foreach(make_proposal($children, $span_point) as $proposal) {
//   echo $proposal['proposal'];
//   echo '<br>';
// }



?>
