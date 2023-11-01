<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions</title>
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
        <li><a href="types-conversion.php">Types conversion</a></li>
        <li><a href="#">Functions</a></li>
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
    <h1>Functions</h1>
    
    <p>A function that multiplies two integers given as a parameters:</p>
    <?php

    function multiplyIntegers($int1, $int2) {
      return $int1 * $int2;
    }
    $num1 = 4;
    $num2 = 5;
    echo "$num1 * $num2 = ", multiplyIntegers($num1,$num2);
    
    ?>
  </main>
</body>
</html>