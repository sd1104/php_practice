<?php

  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  function insertContact($data) {
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

    $count = 0;
    $columns = '';
    $values = '';

    foreach(array_keys($params) as $key) {
      if($count++>0) {
        $colums .= ',';
        $values .= ',';
      }
      $colums .= $key;
      $values .= ':' . $key;
    }

    $sql = 'insert into `contacts` ('. $columns .')values('. $values .')';



  }
?>