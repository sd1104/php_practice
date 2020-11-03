<?php
  require 'validation.php';

  session_start();

  header('X-FRAME-OPTIONS:DENY');

  function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
  }

  $pageFlag = 0;
  $error = validation($_POST);

  if(!empty($_POST['btn_confirm']) ) {
    $pageFlag = 1;
  }
  if(!empty($_POST['btn_submit']) ) {
    $pageFlag = 2;
  }

  echo '<pre>';
    var_dump($_POST);
    var_dump($_SESSION);
    echo $pageFlag;
  echo '</pre>';

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/main.js">
  <title>form practice</title>
</head>
<body>

  <?php if($pageFlag == 0): ?>
  <?php
    if( !isset($SESSION['csrfToken']) ){
      $csrfToken = bin2hex(random_bytes(32));
      $_SESSION['csrfToken'] = $csrfToken;
    }
    $token = $_SESSION['csrfToken'];
  ?>
    <h2>入力画面 </h2>
    <form  id="form1" method="POST" action="practice5.php">
      <input type="text" name="test" value="<?php echo h($_POST['test']) ?>">
      <input type="hidden" name="csrf" value="$token">
      <input type="submit" name="btn_confirm" value="confirm">
    </form>
  <?php endif; ?>


  <?php if($pageFlag == 1): ?>
  <?php if($_POST['csrf'] === $_SESSION['csrfToken']): ?>
    <h2>確認画面 </h2>
    <?php echo h($_POST['test']) ?>
    <form  id="form1" method="POST" action="practice5.php">
      <input type="hidden" name="test" value="<?php echo h($_POST['test']) ?>">
      <input type="hidden" name="csrf" value="<?php echo h($_POST['csrf']) ?>">
      <input type="submit" name="btn_submit" value="submit">
    </form>
  <?php endif; ?>
  <?php endif; ?>


  <?php if($pageFlag == 2): ?>
  <?php if($_POST['csrf'] === $_SESSION['csrfToken']): ?>
    <h2>完了画面</h2>
    送信が完了しました。
    <form  id="form1" method="POST" action="practice5.php">
      <input type="submit" name="btn_top" value="toppage">
    </form>
  <?php endif; ?>
  <?php endif; ?>





</body>
</html>