<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator Form</title>
  <link rel="stylesheet" href="../assets/style/main.css">
</head>
<body>
  <header>
    <?php
      $file = __FILE__;
      require "../nav.php";
    ?>
  </header>

  <main>
    <h1>Calculator Form</h1>
  
    <form action="result.php" method="GET">
      <label>Operand 1:</label>
      <input type="number" name="op1" id="op1" step="0.01" required><br>
      <label>Operand 2:</label>
      <input type="number" name="op2" id="op2" step="0.01" required><br>
      <label>Operator:</label>
      <select name="operand" id="operand" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
      </select><br>
      <input type="submit" value="Submit">
    </form>
  </main>
</body>
</html>