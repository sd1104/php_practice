<?php
require 'validation';

session_start();
header('X-FRAME-OPTIONS:DENY');
// クロスサイトスクリプティング対策：送信時文字をサニタイジングする
function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

echo '<pre>';
  var_dump($_POST);
  var_dump($_SESSION);
echo '</pre>';

$pageFlag = 0;
$error = validation($_POST);

if( !empty($_POST['btn_confirm']) && empty($error)) {
  $pageFlag = 1;
}
if( !empty($_POST['btn_submit']) ) {
  $pageFlag = 2;
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>practice1.php</title>
</head>
<body>

</body>
</html>