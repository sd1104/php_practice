<?php
  require 'validation.php';

  session_start();

  header('X-FRAME-OPTIONS:DENY');

  function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
  }

  $pageFlag = 0;
  $error = validation($_POST);

  if(!empty($_POST['btn_confirm']) && empty($error)) {
    $pageFlag = 1;
  }
  if(!empty($_POST['btn_submit']) && empty($error)) {
    $pageFlag = 2;
  }

  echo '<pre>';
    var_dump($_POST);
    var_dump($_SESSION);
    echo $pageFlag;
  echo '</pre>';

?>
