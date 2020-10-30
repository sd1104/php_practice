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
  <link rel="stylesheet" href="../css/main.css">
  <title>practice1.php</title>
</head>
<body>

  <?php if($pageFlag == 0): ?>

    <form id="form1" method="POST" action="practice.php">
    <input type="hidden" name="csrf" value=""><?php echo h($token) ?>
      <input type="submit" name="btn_confirm" value="確認する">
    </form>

  <?php endif; ?>


  <?php if($pageFlag == 1): ?>
    <form id="form1" method="POST" action="practice.php">
    <input type="hidden" name="csrf" value=""><?php echo h($_POST['csrf']) ?>
      <input type="submit" name="btn_submit" value="送信する">
    </form>
  <?php endif; ?>


  <?php if($pageFlag == 2): ?>
    送信が完了しました。
    <form id="form1" method="POST" action="practice.php">
      <input type="hidden" name="csrf" value=""><?php echo h($_POST['csrf']) ?>
      <input type="submit" name="top" value="トップへ">
    </form>
    <?php unset($_SESSION['csrfToken']) ?>
  <?php endif; ?>



</body>
</html>