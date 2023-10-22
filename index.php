<!DOCTYPE html>
<html lang="en">

<?php
  // Se puede crear codigo php desde cualquier parte del html
  $title = "DWES";

  /* 
    Esto es un bloque de comentarios 
  */
  $greet = "Hola desde PHP";
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
      # Se muestran las variables usando 'echo'
      echo $title;
    ?>
  </title>
  <link rel="stylesheet" href="assets/style/nav.css">
</head>
<body>
  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li>
        <a href="variables">Uso de variables</a>
        <ul>
          <li><a href="variables/constantes.php">Constantes</a></li>
        </ul>
      </li>
      <li><a href="expresiones-numericas.php">Expresiones numericas</a></li>
      <li><a href="manejo-de-strings.php">Manejo de Strings</a></li>
      <li><a href="conversion-de-tipos.php">Conversion de Tipos</a></li>
    </ul>
  </nav>

  <h1>Desarrollo Web Entorno Servidor (DWES)</h1>

  <p>
    <?php
      echo $greet;
    ?>
  </p>

  <?php
    echo "<p>Primer argumento</p>", "<p>Segundo argumento</p>";
  ?>

  <p> <?=$greet; echo " otra vez";?> </p>
</body>
</html>