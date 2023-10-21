<!DOCTYPE html>
<html lang="es">

<?php
  // Se puede crear codigo php desde cualquier parte del html
  $title = "DWES";
  $greet = "Hola desde PHP";
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
      // Se muestran las variables usando 'echo'
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
</body>
</html>