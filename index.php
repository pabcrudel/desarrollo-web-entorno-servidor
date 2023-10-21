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
</head>
<body>
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

  <a href="variables">Uso de variables</a>
</body>
</html>