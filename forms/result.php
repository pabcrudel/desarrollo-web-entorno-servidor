<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator Result</title>
  <link rel="stylesheet" href="../assets/style/main.css">
</head>
<body>
  <header>
    <h4 id="title">Index</h4>
    <nav>
      <ul>
        <li><a href="../">Home</a></li>
        <li>
          <a href="../variables">Variables</a>
          <ul>
            <li><a href="../variables/constants.php">Constants</a></li>
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
            <li><a href="get.html">Get</a></li>
            <li><a href="post.html">Post</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>

  <main>
    <h1>Calculator Result</h1>

    <?php
    
    // Catch parameters from the request
    $n1 = isset($_POST["op1"]) ? $_POST["op1"] : $_GET["op1"];
    $operand = isset($_POST["operand"]) ? $_POST["operand"] : $_GET["operand"];
    $n2 = isset($_POST["op2"]) ? $_POST["op2"] : $_GET["op2"];

    // Perform the calc depending on the operand
    switch ($operand) {
      case "+": $res=$n1+$n2; break;
      case "-": $res=$n1-$n2; break;
      case "*": $res=$n1*$n2; break;
      case "/":
        // Prevent dividing by zero error
        if($n2 != 0) $res=$n1/$n2;
        else $res="error";
        break;
      default: $res="error";
    }

    echo "$n1 $operand $n2 = $res";
    
    ?>
  </main>
</body>
</html>