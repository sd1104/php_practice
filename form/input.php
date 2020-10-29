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

  <?php ?>

  <form method="POST" action="input.php" >

  </form>

</body>
</html>

<?php ?>