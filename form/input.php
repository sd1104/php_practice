<?php
  echo '<pre>';
    var_dump($_POST);
  echo '</pre>';
  $pageFlag = 0;
  if(!empty($_POST['btn_confirm'])) {
    $pageFlag = 1;
  }
  if(!empty($_POST['btn_submit'])) {
    $pageFlag = 2;
  }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>input.php</title>
</head>
<body>

<?php if($pageFlag === 0): ?>
  <form method="POST" action="input.php">
    名前
    <input type="text" name="your_name">
    <br>
    メールアドレス
    <input type="email" name="email">
    <br>
    <input type="submit" name="btn_confirm" value="確認する">
  </form>

<?php endif; ?>


<?php if($pageFlag === 1): ?>
<?php endif; ?>


<?php if($pageFlag === 2): ?>
<?php endif; ?>


</body>
</html>


<?php ?>