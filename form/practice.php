<?php
require 'validation.php';

session_start();
header('X_FRAME-OPTIONS:DENY');
function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

echo '<pre>';
var_dump($_POST);
var_dump($_SESSION);
// echo $_POST;
echo '</pre>';

$pageFlag = 0;
$error = validation($_POST);

if (!empty($_POST['btn_confirm']) && empty($error)) {
  $pageFlag = 1;
}
if (!empty($_POST['btn_submit']) ) {
  $pageFlag = 2;
}

echo $pageFlag;
?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/main.css">
  <title>practice.php</title>
</head>

<body>
  <h2>form practice</h2>
  <br>
  <h3>お問い合わせフォーム</h3>

  <?php if ($pageFlag === 0) : ?>
    <?php
    if (!isset($_SESSION['csrfToken'])) {
      $csrfToken = bin2hex(random_bytes(32));
      $_SESSION['csrfToken'] = $csrfToken;
    }
    $token = $_SESSION['csrfToken'];
    ?>
    <?php if (!empty($_POST['btn_confirm']) && !empty($error)) : ?>
      <ul>
        <?php foreach ($error as $value) : ?>
          <li><?php echo $value; ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
    <form id="form1" method="POST" action="practice.php">
      <label for="your_name">氏名</label>
      <input id="your_name" type="text" name="your_name" value="<?php echo h($_POST['your_name']); ?>">
      <br>
      <label for="email">メールアドレス</label>
      <input id="email" type="text" name="email" value="<?php echo h($_POST['email']); ?>">
      <br>
      <label for="gender">性別</label>
      <input id="your_name" type="radio" name="gender" value="0">男性
      <input id="your_name" type="radio" name="gender" value="1">女性
      <br>
      <label for="age">年齢</label>
      <select id="your_name" name="age">
        <option value="0">選択してください。</option>
        <option value="1">10歳</option>
      </select>
      <br>
      <label for="contact">問合せ</label>
      <textarea id="contact" name="contact" name="contact" value="<?php echo h($_POST['contact']); ?>"></textarea>
      <br>
      <label for="caution">注意</label>
      <input id="caution" type="checkbox" name="caution" value="1">

      <input type="hidden" name="csrf" value="<?php echo $token; ?>">

      <br>
      <input type="submit" name="btn_confirm" value="確認する">
    </form>
  <?php endif; ?>


  <?php if ($pageFlag == 1) : ?>
    <?php if ($_POST['csrf'] === $_SESSION['csrfToken']) : ?>
        氏名；<?php echo h($_POST['your_name']); ?>
        <br>
        メールアドレス；<?php echo h($_POST['email']); ?>
        <br>
        性別；<?php echo h($_POST['gender']); ?>
        <br>
        年齢；<?php echo h($_POST['age']); ?>
        <br>
        問合せ<?php echo h($_POST['contact']); ?>
      <form method="POST" action="practice.php">
        <input type="submit" name="btn_submit" value="送信する">
        <input type="hidden" name="csrf" value="<?php echo h($_POST['csrf']); ?>">
      </form>
    <?php endif; ?>
  <?php endif; ?>


  <?php if ($pageFlag === 2) : ?>
    <?php if ($_POST['csrf'] === $_SESSION['csrfToken']) : ?>
      送信が完了しました。
      <form method="POST" action="practice.php">
        <input type="submit" name="top" value="トップへ">
      </form>
      <?php unset($_SESSION['csrfToken']); ?>
    <?php endif; ?>
  <?php endif; ?>

</body>

</html>