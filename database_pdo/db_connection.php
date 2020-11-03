<?php

  const DB_HOST = 'mysql:dbname=php_training;host=localhost;charset=utf8';
  const DB_USER = 'php_trainig_user';
  const DB_PASSWORD = 'php1234';

  try{
    $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      // ステートメントがforeach文に直接かけられた場合のフェッチスタイルを設定します．
      // カラム名をキーとする連想配列で取得する．
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      // エラーを返す
      PDO::ATTR_EMULATE_PREPARES => false,
      // プリペアードステイトメントを起動するかの設定。
      // 起動するか否かは状況による
    ]);
    echo 'DB_connection successed!';
  } catch(PDOException $e){
    echo 'DB_connection failed!' . "<br>";
    echo $e->getMessage();
    exit();
  }

?>