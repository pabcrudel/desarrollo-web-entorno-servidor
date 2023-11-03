<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Do While Loop</title>
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
    <h1>Do While Loop</h1>

    <?php
    
    $array = array(0=>25, 1=>74, 2=>45);
    $count = count($array);
    $i = 0;

    do {
      echo $array[$i];
      $i++;
    } while ($i < $count)
    
    ?>
  </main>
</body>
</html>