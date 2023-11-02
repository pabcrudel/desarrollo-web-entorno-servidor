<!DOCTYPE html>
<html lang="en">

<?php $title = "Strings management"; ?>

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

    <h2>Assign some text</h2>
    <?php
      $txt = "My string";
      echo "<p>$txt</p>";
    ?>

    <h2>Concatenate strings</h2>
    <?php
      $txt = $txt . " concatenated";
      echo "<p>$txt</p>";

      $txt .= " auto concatenate";
      echo "<p>$txt</p>";
    ?>
  </main>
</body>
</html>