<!DOCTYPE html>
<html lang="en">

<?php $title = "Manejo de Strings"; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>
  <link rel="stylesheet" href="assets/style/nav.css">
</head>
<body>
  <nav>
    <ul>
      <li><a href="./">Home</a></li>
      <li>
        <a href="variables">Uso de variables</a>
        <ul>
          <li><a href="variables/constantes.php">Constantes</a></li>
        </ul>
      </li>
      <li><a href="expresiones-numericas.php">Expresiones numericas</a></li>
      <li><a href="#">Manejo de Strings</a></li>
      <li><a href="conversion-de-tipos.php">Conversion de Tipos</a></li>
    </ul>
  </nav>

  <h1><?=$title?></h1>

  <h2>Asignar un texto</h2>
  <?php
    $txt = "Mi string";
    echo "<p>$txt</p>";
  ?>

  <h2>Concatenar cadenas</h2>
  <?php
    $txt = $txt . " concatenado";
    echo "<p>$txt</p>";

    $txt .= " auto concatenado";
    echo "<p>$txt</p>";
  ?>
</body>
</html>