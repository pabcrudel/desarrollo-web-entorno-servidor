<!DOCTYPE html>
<html lang="en">

<?php
  $title = "Numeric expressions";
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?=$title?> </title>
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
    <h1> <?=$title?> </h1>

    <?php
      echo "<h2>Integer addition</h2>";
      $num = 2;
      $sum = $num + $num;
      echo "<p>$num + $num = $sum</p>";

      echo "<h2>Complex expression</h2>";
      $complexExp = (($sum - 3) * 4) / 2;
      echo "<p>(($sum - 3) * 4) / 2 = $complexExp</p>";

      echo "<h2>Other way</h2>";
      $num = 35;
      echo "<p>$num - 1 = ", $num = $num - 1, "</p>";

      // Dividing by zero is an error
      echo "<p>$num / 2 = ", $num /= $num, "</p>";
      
      echo "<p>$num + 1 = ", ++$num, "</p>";
      
      echo "<p>$num * 5 = ", $num * 5, "</p>";
    ?>
  </main>
</body>
</html>