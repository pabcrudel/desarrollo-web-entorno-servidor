<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables</title>
  <link rel="stylesheet" href="../assets/style/nav.css">
</head>
<body>
  <nav>
    <ul>
      <li><a href="../">Home</a></li>
      <li>
        <a href="#">Uso de variables</a>
        <ul>
          <li><a href="constantes.php">Constantes</a></li>
        </ul>
      </li>
      <li><a href="../expresiones-numericas.php">Expresiones numericas</a></li>
      <li><a href="../manejo-de-strings.php">Manejo de Strings</a></li>
      <li><a href="../conversion-de-tipos.php">Conversion de Tipos</a></li>
    </ul>
  </nav>

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