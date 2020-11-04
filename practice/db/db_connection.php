<?php
  const DB_HOST = 'mysql:dbname=php_training;host=localhost;chrset=utf8';
  const DB_USER = 'php_traing_user';
  const DB_PASSWORD = '';

  try{
    $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_EMULATE_PREPARES => false
    ]);
  } catch(PDOException $e) {
    echo 'failed';
    echo '<br>';
    echo $e->getMessage();
    exit();
  }

?>