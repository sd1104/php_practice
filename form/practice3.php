<?php
  require 'validation.php';

  session_start();

  header('X-FRAME-OPTIONS:DENY');

  function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
  }


  $pageFlag = 0;
  $error = validation($_POST);

  echo '<pre>';
    var_dump($_POST);
    var_dump($_SESSION);
    var_dump($pafeFlag);
    // var_dump($error);
  echo '</pre>';

  if( !empty($_POST['btn_confirm'])  ) {
    $pageFlag = 1;
  }
  if( !empty($_POST['btn_submit'])) {
    $pageFlag = 2;
  }

?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/main.css">
  <title>Practice3</title>
</head>

<body>

  <h2>フォーム作成練習</h2>

  <h3>フォーム入力</h3>

  <?php if($pageFlag == 0): ?>
    <?php
      if( !isset($_SESSION['csrfToken']) ) {
        $csrfToken = bin2hex(random_bytes(32));
        $_SESSION['csrfToken'] = $csrfToken;
      }
      $token = $_SESSION['csrfToken'];
    ?>
    <form method="POST" action="practice3.php" id="form1">
      <input type="text" name="your_name" value="<?php echo h($_POST['your_name']) ?>">
      <input type="text" name="email" value="<?php echo h($_POST['email']) ?>">
      <input type="hidden" name="csrf" value="<?php echo $token ?>">
      <input type="submit" name="btn_confirm" value="確認する">
    </form>
  <?php endif; ?>


  <?php if($pageFlag == 1): ?>
    <?php if($_POST['csrf'] === $_SESSION['csrfToken']): ?>
      <h3>送信内容確認ページ</h3>
      <form method="POST" action="practice3.php" id="form1">
        <input type="hidden" name="csrf" value="<?php echo $_POST['csrf'] ?>">
        <input type="submit" name="btn_submit" value="送信する">
      </form>
    <?php endif; ?>
  <?php endif; ?>


  <?php if($pageFlag == 2): ?>
    <?php if($_POST['csrf'] === $_SESSION['csrfToken']): ?>
      <h3>送信完了ページ</h3>
        送信が完了しました。
        <form method="POST" action="practice3.php" id="form1">
          <input type="hidden" name="csrf" value="<?php echo $_POST['csrf'] ?>">
          <input type="submit" name="top" value="トップへ">
        </form>
      <?php unset($_SESSION['csrfToken']); ?>
    <?php endif; ?>
  <?php endif; ?>




</body>

</html>