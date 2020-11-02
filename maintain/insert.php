<?php

  ini_set('display_errors', 1);
  error_reporting(E_ALL);


    require 'db_connection.php';

    $params = [
      'id' => null,
      'your_name' => $data['your_name'],
      'email' => $data['email'],
      'url' => $data['url'],
      'gender' => $data['gender'],
      'age' => $data['age'],
      'contact' => $data['contact'],
      'created_at' => null
    ];



    $sql = 'insert into `contacts` ('. $columns .')values('. $values .')';


    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);





?>