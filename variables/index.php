<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables</title>
  <link rel="stylesheet" href="../assets/style/main.css">
</head>
<body>
  <header>
    <?php
      $file = __FILE__;
      require "../nav.php";
    ?>
  </header>

  <main>
    <h1>Uso de variables</h1>
  
    <?php
      $hour = 12;
      $minute = 15;
      $city = "Valencia";
      $text = "The train with destination $city departs at $hour:$minute";
    ?>
  
    <p> <?=$text;?> </p>
  </main>
</body>
</html>