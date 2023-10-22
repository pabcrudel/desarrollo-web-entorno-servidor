<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables constantes</title>
  <link rel="stylesheet" href="../assets/style/nav.css">
</head>
<body>
  <nav>
    <ul>
      <li><a href="../">Home</a></li>
      <li>
        <a href="./">Uso de variables</a>
        <ul>
          <li><a href="#">Constantes</a></li>
        </ul>
      </li>
      <li><a href="../expresiones-numericas.php">Expresiones numericas</a></li>
      <li><a href="../manejo-de-strings.php">Manejo de Strings</a></li>
    </ul>
  </nav>

  <h1>Uso de variables constantes</h1>

  <?php
    define("PI", 3.14159);
  ?>

  <p> <?php echo PI; ?> </p>
</body>
</html>