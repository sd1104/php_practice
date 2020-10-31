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
  if( !empty($_POST['btn_confirm'])) {
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
  hello
</body>

</html>