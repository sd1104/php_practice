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
    var_dump($error);
  echo '</pre>';

  if( !empty($_POST['btn_confirm']) && empty($error) ) {
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

  <?php if($pageFlag = 0): ?>
    <form method="POST" action="practice3.php" id="form1">
      <input type="submit" name="btn_confirm" value="確認する">
    </form>
  <?php endif; ?>


  <?php if($pageFlag = 1): ?>
    <form method="POST" action="practice3.php" id="form1">
      <input type="submit" name="btn_submit" value="送信する">
    </form>
  <?php endif; ?>


  <?php if($pageFlag = 2): ?>
    <form method="POST" action="practice3.php" id="form1">
    <input type="submit" name="top" value="トップへ">
    </form>
  <?php endif; ?>




</body>

</html>