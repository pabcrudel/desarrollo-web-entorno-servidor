<!DOCTYPE html>
<html lang="en">

<?php
  $title = "Asignaciones numericas y expresiones";
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?=$title?> </title>
</head>
<body>
  <ul>
    <li><a href="./">Home</a></li>
    <li><a href="variables">Uso de variables</a></li>
    <li><a href="#">Expresiones numericas</a></li>
  </ul>

  <h1> <?=$title?> </h1>

  <?php
    echo "<h2>Suma de enteros</h2>";
    $num = 2;
    $sum = $num + $num;
    echo "<p>$num + $num = $sum</p>";

    echo "<h2>Expresion compleja</h2>";
    $complexExp = (($sum - 3) * 4) / 2;
    echo "<p>(($sum - 3) * 4) / 2 = $complexExp</p>";

    echo "<h2>Otras formas de hacer operaciones</h2>";
    $num = 35;
    echo "<p>$num - 1 = ", $num = $num - 1, "</p>";

    // Las divisiones con 0 generar errores
    echo "<p>$num / 2 = ", $num /= $num, "</p>";
    
    echo "<p>$num + 1 = ", ++$num, "</p>";
    
    echo "<p>$num * 5 = ", $num * 5, "</p>";
  ?>
</body>
</html>