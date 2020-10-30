<?php
require 'validation.php';

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

    <?php
      if(!isset($_SESSION['csrfToken'])) {
        $csrfToken = bin2hex(random_bytes(32));
        $_SESSION['csrfToken'] = $csrfToken;
      }
      $token = $_SESSION['csrfToken']
    ?>

    <form id="form1" method="POST" action="practice2.php">
      <br><input type="text" name="your_name" value="<?php echo h($_POST['your_name']); ?>">
      <br><input type="text" name="email" value="<?php echo h($_POST['email']); ?>">
      <br><input type="radio" name="gender" value="0">男性
      <input type="radio" name="gender" value="1">女性
      <br><select name="age">
        <option value="0">選択してください。</option>
        <option value="1">10歳</option>
      </select>
     <br> <textarea name="contact" value="<?php echo h($_POST['contact']); ?>"></textarea>
      <br><input type="checkbox" name="caution" value="1">
      <br><input type="hidden" name="csrf" value="<?php echo h($token) ?>">
      <br><input type="submit" name="btn_confirm" value="確認する">
    </form>

  <?php endif; ?>


  <?php if($pageFlag == 1): ?>
    <?php if($_POST['csrf'] === $_SESSION['csrfToken']) :?>
      氏名：<?php echo h($_POST['your_name']); ?><br>
      メールアドレス；<?php echo h($_POST['email']); ?><br>
      性別：<?php echo h($_POST['gender']); ?><br>
      年齢<?php echo h($_POST['age']); ?><br>
      問合せ<?php echo h($_POST['contact']); ?><br>
    <form id="form1" method="POST" action="practice2.php">
    <input type="hidden" name="csrf" value="<?php echo h($_POST['csrf']) ?>">
      <input type="submit" name="btn_submit" value="送信する">
    </form>
  <?php endif; ?>
  <?php endif; ?>


  <?php if($pageFlag == 2): ?>
    <?php if($_POST['csrf'] === $_SESSION['csrfToken']) :?>
    送信が完了しました。
    <form id="form1" method="POST" action="practice2.php">
      <input type="hidden" name="csrf" value="<?php echo h($_POST['csrf']) ?>">
      <input type="submit" name="top" value="トップへ">
    </form>
    <?php unset($_SESSION['csrfToken']) ?>
    <?php endif; ?>
  <?php endif; ?>



</body>
</html>