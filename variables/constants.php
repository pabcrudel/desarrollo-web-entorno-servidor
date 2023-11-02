<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Constant variables</title>
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
    <h1>Use of Constant variables</h1>
  
    <?php
      define("PI", 3.14159);
    ?>
  
    <p> <?php echo PI; ?> </p>
  </main>
</body>
</html>