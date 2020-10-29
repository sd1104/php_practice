<?php

  // CSRF対策：セッションにトークンを生成する
  session_start();

  // クリックジャッキング対策：被せを拒否する
  header('X-FRAME-OPTIONS:DENY');

  // クロスサイトスクリプティング対策：送信時文字をサニタイジングする
  function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
  }

  echo '<pre>';
    var_dump($_SESSION);
  echo '</pre>';

  $pageFlag = 0;
  if (!empty($_POST['btn_confirm'])) {
    $pageFlag = 1;
  }
  if (!empty($_POST['btn_submit'])) {
    $pageFlag = 2;
  }

?>



<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gathers</title>
  </head>

  <body>


    <?php if ($pageFlag === 1) : ?>
    <?php if ($_POST['csrf'] === $_SESSION['csrfToken']) : ?>

      <form method="POST" action="input.php">
        名前
        <?php echo h($_POST['your_name']); ?>
        <br>
        メールアドレス
        <?php echo h($_POST['email']); ?>
        <br>
        <input type="submit" name="back" value="戻る">
        <input type="submit" name="btn_submit" value="送信する">

        <input type="hidden" name="your_name" value="<?php echo h($_POST['your_name']); ?>">
        <input type="hidden" name="email" value="<?php echo h($_POST['email']); ?>">
        <input type="hidden" name="csrf" value="<?php echo h($_POST['csrf']);; ?>">
      </form>
    <?php endif; ?>
    <?php endif; ?>



    <?php if ($pageFlag === 2) : ?>
    <?php if ($_POST['csrf'] === $_SESSION['csrfToken']) : ?>
      送信が完了しました。
      <form method="POST" action="input.php">
        <input type="submit" name="top" value="トップへ">
      </form>
    <?php unset($_SESSION['csrtToken']) ?>
    <?php endif; ?>
    <?php endif; ?>



    <?php if ($pageFlag === 0) : ?>
    <?php
      if(!isset($_SESSION['csrfToken'])) {
        $csrfToken = bin2hex(random_bytes(32));
        $_SESSION['csrfToken'] = $csrfToken;
      }
      $token = $_SESSION['csfToken'];
    ?>
      <form method="POST" action="input.php">
        名前
        <input type="text" name="your_name" value="<?php echo h($_POST['your_name']); ?>">
        <br>
        メールアドレス
        <input type="email" name="email" value="<?php echo h($_POST['email']); ?>">
        <br>
        <input type="submit" name="btn_confirm" value="確認する">
        <input type="hidden" name="csrf" value="<?php echo $token; ?>">
      </form>
    <?php endif; ?>


  </body>

</html>

<!-- ○form tag
method:HTTPメソッドを指定する
action：送信先のプログラムのURLを指定する

○input tag
name：情報が送られた際のkeyとなる名前を指定。[]があるかないかで変数か配列かまで判定 -->