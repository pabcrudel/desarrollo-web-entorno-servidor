<!DOCTYPE html>
<html lang="en">

<?php $title = "Conversion de Tipos"; ?>

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
      <li><a href="manejo-de-strings.php">Manejo de Strings</a></li>
      <li><a href="#">Conversion de Tipos</a></li>
    </ul>
  </nav>

  <h1><?=$title?></h1>
  <?php
    $txt = "5";
    echo "<p>Con \"var_dump(\$txt)\" puedo ver su tipo: ",var_dump($txt), "</p>";

    $txt = intval($txt);
    echo "<p>Con \"intval(\$txt)\" pasa a ser ",var_dump($txt), "</p>";

    $txt = strval($txt);
    echo "<p>Con \"strval(\$txt)\" pasa a ser ",var_dump($txt), "</p>";
    
    $num = 2.5;
    $txt += $num;
    echo "<p>Con \"\$txt += $num;\" se transforma en ",var_dump($txt), "</p>";
    
    $txt = strval($txt);
    echo "<p>Con \"strval(\$txt)\" vuelve a ser ",var_dump($txt), "</p>";

    $txt = floatval($txt);
    echo "<p>Y con \"floatval(\$txt)\" vuelve a ser ",var_dump($txt), "</p>";
  ?>

  <h2>Comprobaciones booleanas</h2>
  <?php
    echo "<p>¿La variable \$txt tiene valor? isset(\$txt) = ", isset($txt), "</p>";
    
    unset($txt);
    echo "Con \"unset(\$txt)\" se vacia una variable";

    echo "<p>¿La variable \$txt esta vacia? empty(\$txt) = ", empty($txt), "</p>";
  ?>
</body>
</html>