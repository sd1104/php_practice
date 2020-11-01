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
  echo '</pre>';

  if(!empty($_POST['btn_confirm']) ) {
    $pageFlag = 1;
  }
  if(!empty($_POST['btn_submit']) ) {
    $pageFlag = 1;
  }

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pracetice4</title>
</head>
<body>

  <section>
    <?php if($pageFlag === 0): ?>
      <?php
        if( !isset($_SESSION['csrfToken']) ) {
          $csrfToken = bin2hex(random_bytes(32));
          $csrfToken = $_SESSION['csrfToken'];
        }
        $token = $_SESSION['csrfToken'];
      ?>
    <?php endif; ?>
  </section>


  <section>
    <?php if($pageFlag === 1): ?>
    <?php endif; ?>
  </section>


  <section>
    <?php if($pageFlag === 2): ?>
    <?php endif; ?>
  </section>

</body>
</html>