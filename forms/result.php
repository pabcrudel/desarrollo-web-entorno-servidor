<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator Result</title>
</head>
<body>
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
</body>
</html>