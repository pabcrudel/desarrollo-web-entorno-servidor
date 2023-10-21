<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables</title>
</head>
<body>
  <a href="../">Home</a>

  <h1>Uso de variables</h1>

  <?php
    $hora = 12;
    $minutos = 15;
    $ciudad = "Sevilla";
    $texto = "El tren destino $ciudad sale a las $hora:$minutos"
  ?>

  <p> <?=$texto;?> </p>
</body>
</html>