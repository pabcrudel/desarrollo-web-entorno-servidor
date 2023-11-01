<!DOCTYPE html>
<html lang="en">

<?php $title = "Strings management"; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>
  <link rel="stylesheet" href="assets/style/main.css">
</head>
<body>
  <header>
    <h4 id="title">Index</h4>
    <nav>
      <ul>
        <li><a href="./">Home</a></li>
        <li>
          <a href="variables">Variables</a>
          <ul>
            <li><a href="variables/constants.php">Constants</a></li>
          </ul>
        </li>
        <li><a href="numeric-expressions.php">Numeric expressions</a></li>
        <li><a href="#">Strings management</a></li>
        <li><a href="types-conversion.php">Types conversion</a></li>
        <li><a href="functions.php">Functions</a></li>
        <li><a href="loops.php">Loops</a></li>
        <li>
          <span>Forms</span>
          <ul>
            <li><a href="forms/get.html">Get</a></li>
            <li><a href="forms/post.html">Post</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>

  <main>
    <h1><?=$title?></h1>

    <h2>Assign some text</h2>
    <?php
      $txt = "My string";
      echo "<p>$txt</p>";
    ?>

    <h2>Concatenate strings</h2>
    <?php
      $txt = $txt . " concatenated";
      echo "<p>$txt</p>";

      $txt .= " auto concatenate";
      echo "<p>$txt</p>";
    ?>
  </main>
</body>
</html>