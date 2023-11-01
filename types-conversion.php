<!DOCTYPE html>
<html lang="en">

<?php $title = "Types conversion"; ?>

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
        <li><a href="strings-management.php">Strings management</a></li>
        <li><a href="#">Types conversion</a></li>
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
    <?php
      $txt = "5";
      echo "<p>\"var_dump(\$txt)\" returns it's type: ",var_dump($txt), "</p>";

      $txt = intval($txt);
      echo "<p>\"intval(\$txt)\" is now a ",var_dump($txt), "</p>";

      $txt = strval($txt);
      echo "<p>\"strval(\$txt)\" is now a ",var_dump($txt), "</p>";
      
      $num = 2.5;
      $txt += $num;
      echo "<p>\"\$txt += $num;\" is now a ",var_dump($txt), "</p>";
      
      $txt = strval($txt);
      echo "<p>\"strval(\$txt)\" is now a ",var_dump($txt), "</p>";

      $txt = floatval($txt);
      echo "<p>\"floatval(\$txt)\" is now a ",var_dump($txt), "</p>";
    ?>

    <h2>Boolean ones</h2>
    <?php
      echo "<p>¿Has \$txt any value? isset(\$txt) = ", isset($txt), "</p>";
      
      unset($txt);
      echo "\"unset(\$txt)\" removes a variable";

      echo "<p>¿Is \$txt empty? empty(\$txt) = ", empty($txt), "</p>";
    ?>
  </main>
</body>
</html>