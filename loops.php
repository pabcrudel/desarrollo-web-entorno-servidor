<!DOCTYPE html>
<html lang="en">

<?php $title="Adding natural numbers"; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>
  <link rel="stylesheet" href="assets/style/main.css">
</head>
<body>
  <header>
    <h4 id="title">Index</h4>
    <nav>
      <ul>
        <li><a href="./">Home</a></li>
        <li>
          <a href="variables">Variables</a>
          <ul>
            <li><a href="variables/constants.php">Constants</a></li>
          </ul>
        </li>
        <li><a href="numeric-expressions.php">Numeric expressions</a></li>
        <li><a href="strings-management.php">Strings management</a></li>
        <li><a href="types-conversion.php">Types conversion</a></li>
        <li><a href="functions.php">Functions</a></li>
        <li><a href="#">Loops</a></li>
        <li>
          <span>Forms</span>
          <ul>
            <li><a href="forms/get.html">Get</a></li>
            <li><a href="forms/post.html">Post</a></li>
          </ul>
        </li>
      </ul>
    </nav>
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