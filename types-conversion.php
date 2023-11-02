<!DOCTYPE html>
<html lang="en">

<?php $title = "Types conversion"; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>
  <link rel="stylesheet" href="assets/style/main.css">
</head>
<body>
  <header>
    <?php
      $file = __FILE__;
      require 'nav.php';
    ?>
  </header>

  <main>
    <h1><?=$title?></h1>
    <?php
      $txt = "5";
      echo "<p>\"var_dump(\$txt)\" returns it's type: ",var_dump($txt), "</p>";

      $txt = intval($txt);
      echo "<p>\"intval(\$txt)\" is now a ",var_dump($txt), "</p>";

      $txt = strval($txt);
      echo "<p>\"strval(\$txt)\" is now a ",var_dump($txt), "</p>";
      
      $num = 2.5;
      $txt += $num;
      echo "<p>\"\$txt += $num;\" is now a ",var_dump($txt), "</p>";
      
      $txt = strval($txt);
      echo "<p>\"strval(\$txt)\" is now a ",var_dump($txt), "</p>";

      $txt = floatval($txt);
      echo "<p>\"floatval(\$txt)\" is now a ",var_dump($txt), "</p>";
    ?>

    <h2>Boolean ones</h2>
    <?php
      echo "<p>¿Has \$txt any value? isset(\$txt) = ", isset($txt), "</p>";
      
      unset($txt);
      echo "\"unset(\$txt)\" removes a variable";

      echo "<p>¿Is \$txt empty? empty(\$txt) = ", empty($txt), "</p>";
    ?>
  </main>
</body>
</html>