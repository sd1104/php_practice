<?php

  ini_set('display_errors', 1);
  error_reporting(E_ALL);


    require 'db_connection.php';





    $sql = 'insert into `contacts` ('. $columns .')values('. $values .')';


    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);





?>