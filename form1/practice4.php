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
    var_dump($pageFlag);
  echo '</pre>';

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
    <?php if($pageFlag == 0): ?>
      <?php
        if( !isset($_SESSION['csrfToken']) ) {
          $csrfToken = bin2hex(random_bytes(32));
          $_SESSION['csrfToken'] = $csrfToken;
        }
        $token = $_SESSION['csrfToken'];
      ?>

      <div>
        <h2>input form</h2>
        <form id="form1" method="POST" action="practice4.php">
          your_name:
          <input type="text" name="your_name" value="<?php echo h($_POST['your_name']) ?>">
          <br>
          email:
          <input type="text" name="email" value="<?php echo h($_POST['email']) ?>">
          <br>
          gender:
          <input type="radio" name="gender" value="0">male
          <input type="radio" name="gender" value="1">female
          <br>
          age:
          <select name="age" >
            <option value="0">please select</option>
            <option value="1">10 years old</option>
            <option value="2">20 years old</option>
            <option value="3">30 years old</option>
            <option value="4">40 years old</option>
            <option value="5">50 years old</option>
          </select>
          <br>
          contact:
          <textarea name="contact" value="<?php echo h($_POST['contact']) ?>" id="contact" cols="30" rows="10"></textarea>
          <br>
          caution:
          <input type="checkbox" name="caution" value="1">
          <br>
          <input type="hidden" name="csrf" value="<?php echo $token ?>">
          <input type="submit" name="btn_confirm" value="confirm">
        </form>
      </div>
    <?php endif; ?>
  </section>


  <section>
    <?php if($pageFlag == 1): ?>
    <?php if($_POST['csrf'] === $_SESSION['csrfToken']): ?>
      <h2>input confirm</h2>
      <form method="POST" action="practice4.php" id="form1">
        your_name:<?php echo h($_POST['your_name']) ?>
        <br>
        email:<?php echo h($_POST['email']) ?>
        <br>
        gender:<?php echo h($_POST['gender']) ?>
        <br>
        age:<?php echo h($_POST['age']) ?>
        <br>
        <?php echo h($_POST['contact']) ?>
        <br>
        <input type="hidden" name="csrf" value="<?php echo h($_SESSION['csrfToken']) ?>">
        <input type="submit" name="btn_submit" value="submit">
      </form>

    <?php endif; ?>
    <?php endif; ?>
  </section>


  <section>
    <?php if($pageFlag == 2): ?>
    <?php if($_POST['csrf'] === $_SESSION['csrfToken']): ?>
      <div>
        <p>submit done perfectly</p>
        <form method="POST" action="practice4.php" id="form1">
          <input type="submit" name="top" value="to top">
        </form>
        <?php unset($_SESSION['csrfToken']) ?>
      </div>
    <?php endif; ?>
    <?php endif; ?>
  </section>

</body>
</html>