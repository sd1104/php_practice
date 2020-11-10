<?php
require 'data.php';
require 'sort.php';

$proposals = make_proposal($children, $span_point)
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Makking table Kondankai</title>
</head>
<body>

<h2>コマリスト</h2>

<?php foreach( $proposals as $proposal): ?>
  <ul>
    <li>
      <?php
        echo $proposal['proposal'] .':';
        echo $proposal['name'] .'さん';
      ?>
    </li>
  </ul>

<?php endforeach; ?>

</body>
</html>