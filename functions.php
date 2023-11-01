<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions</title>
</head>
<body>
  <h1>Functions</h1>
  
  <p>A function that multiplies two integers given as a parameters:</p>
  <?php

  function multiplyIntegers($int1, $int2) {
    return $int1 * $int2;
  }
  $num1 = 4;
  $num2 = 5;
  echo "$num1 * $num2 = ", multiplyIntegers($num1,$num2);
  
  ?>
</body>
</html>