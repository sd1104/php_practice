<?php

echo '<pre>';
var_dump($_POST);
echo '</pre>';

$pageFlag = 0;
if(!empty($_POST['btn_confirm'])) {
  $pageFlag = 1;
}
if(!empty($_POST['btn_submit'])) {
  $pageFlag = 2;
}

?>



<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Form</title>
</head>

<body>













</body>
</html>

<!-- ○form tag
method:HTTPメソッドを指定する
action：送信先のプログラムのURLを指定する

○input tag
name：情報が送られた際のkeyとなる名前を指定。[]があるかないかで変数か配列かまで判定 -->
