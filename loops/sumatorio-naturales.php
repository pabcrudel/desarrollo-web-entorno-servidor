<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sumatorio de Numeros Naturales</title>
</head>
<body>
  <h1>Sumatorio de Numeros Naturales</h1>
  
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
</body>
</html>