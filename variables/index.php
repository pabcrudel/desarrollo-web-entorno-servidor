<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables</title>
  <link rel="stylesheet" href="../assets/style/main.css">
</head>
<body>
  <header>
    <h4 id="title">Index</h4>
    <nav>
      <ul>
        <li><a href="../">Home</a></li>
        <li>
          <a href="#">Variables</a>
          <ul>
            <li><a href="constants.php">Constants</a></li>
          </ul>
        </li>
        <li><a href="../numeric-expressions.php">Numeric expressions</a></li>
        <li><a href="../strings-management.php">Strings management</a></li>
        <li><a href="../types-conversion.php">Types conversion</a></li>
        <li><a href="../functions.php">Functions</a></li>
        <li><a href="../loops.php">Loops</a></li>
        <li>
          <span>Forms</span>
          <ul>
            <li><a href="../forms/get.html">Get</a></li>
            <li><a href="../forms/post.html">Post</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>

  <main>
    <h1>Uso de variables</h1>
  
    <?php
      $hour = 12;
      $minute = 15;
      $city = "Valencia";
      $text = "The train with destination $city departs at $hour:$minute";
    ?>
  
    <p> <?=$text;?> </p>
  </main>
</body>
</html>