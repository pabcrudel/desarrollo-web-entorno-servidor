<!DOCTYPE html>
<html lang="en">

<?php $title="Adding natural numbers"; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>
  <link rel="stylesheet" href="../assets/style/main.css">
</head>
<body>
  <header>
    <?php
      $file = __FILE__;
      require '../nav.php';
    ?>
  </header>

  <main>
    <h1><?=$title?></h1>
    
    <?php

    $sum = "";
    $res = 0;
    
    for ($i=10; $i < 101; $i++) {
      if ($i % 2 === 0) {
        if (empty($sum)) $sum = "$sum$i";
        else $sum = "$sum + $i";

        $res += $i;
      };
    }

    echo "$sum = $res";
    
    ?>
  </main>
</body>
</html>