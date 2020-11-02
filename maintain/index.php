<?php

  require 'db_connection.php';
  // user_input:No
  // $sql = 'select * from contacts';
  // $stmt = $pdo->query($sql);
  // $result = $stmt->fetchall();

  // echo '<pre>';
  //   var_dump($result);
  // echo '</pre>';


  // user_input:YES
  $sql = 'select * from contacts where id = :id';
  $pdo->beginTransaction();

  try{
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue('id', 2, PDO::PARAM_INT);
    $stmt->execute();

    $pdo->commit();

  } catch(PDOException $e){
    $pdo->rollback();
  }

  $result = $stmt->fetchall();
  echo '<pre>';
    var_dump($result);
  echo '</pre>';

?>