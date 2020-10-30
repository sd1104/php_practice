<?php
require 'validation.php';

session_start();
header('X_FRAME-OPTIONS:DENY');
function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

echo '<pre>';
  var_dump($_POST);
  // echo $_POST;
echo '</pre>';

$pageFlag = 0;
$error = validation($_POST);

if (!empty($_POST['btn_confirm']) && empty($error)) {
  $pageFlag = 1;
}
if (!empty($_POST['btn_submit']) && empty($error)) {
  $pageFlag = 2;
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>practice.php</title>
</head>
<body>
  <h2>form practice</h2>
  <br>
  <h3>お問い合わせフォーム</h3>

  <?php if($pageFlag === 0): ?>
  <?php endif; ?>


  <?php if($pageFlag === 1): ?>
  <?php endif; ?>


  <?php if($pageFlag === 2): ?>
    送信が完了しました。
    <form method="GET" action="practice.php">
      <input type="submit" name="top" value="トップへ">
    </form>
  <?php endif; ?>

</body>
</html>