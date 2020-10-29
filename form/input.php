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
  <title>input.php</title>
</head>
<body>

  <form method="POST" action="confirm.php">
    名前
    <input type="text" name="your_name" value="<?php echo $_POST['your_name']; ?>">
    <br>
    メールアドレス
    <input type="email" name="email" value="<?php echo $_POST['email']; ?>">
    <br>
    <input type="submit" name="btn_confirm" value="確認する">
  </form>


</body>
</html>


<?php ?>