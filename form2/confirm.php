<?php
  echo '<pre>';
    var_dump($_POST);
  echo '</pre>';
?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>confirm</title>
</head>

<body>
  <form method="POST" action="finished.php">
    名前
    <?php echo $_POST['your_name']; ?>
    <br>
    メールアドレス
    <?php echo $_POST['email']; ?>
    <br>

    <input type="submit" name="btn_submit" value="送信する">

    <input type="hidden" name="your_name" value="<?php echo $_POST['your_name']; ?>">
    <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
  </form>
</body>

</html>