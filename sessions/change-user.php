<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form with Session</title>
  <link rel="stylesheet" href="../assets/style/main.css">
</head>
<body>
  <header>
    <?php
      $file = __FILE__;
      require '../nav.php';
    ?>
  </header>
  
  <main>
    <h1>Form with Session</h1>

    <form method="POST" action="show-user.php">
      <label>Name:</label>
      <input type="text" name="name" id="name" required><br>
      <label>Surname:</label>
      <input type="text" name="surname" id="surname" required><br>
      <input type="submit" value="Submit">
    </form>
  </main>
</body>
</html>