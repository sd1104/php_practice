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
  送信が完了しました。
  <form method="GET" action="input.php">
    <input type="submit" name="top" value="トップへ">
  </form>
</body>

</html>