<!DOCTYPE html>
<html lang="en">

<?php
  // Variables can ve declared outside <html> tag
  $title = "Hello PHP";
  $greet = "Hello from PHP";
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
      # Variables can be printed with'echo'
      echo $title;
    ?>
  </title>
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
    <h1>Website Development Server Environment</h1>
  
    <p>
      <?php
        echo $greet;
      ?>
    </p>
  
    <?php
      echo "<p>First text</p>", "<p>Second one</p>";
    ?>
  
    <p> <?=$greet; echo " again";?> </p>
  </main>
</body>
</html>