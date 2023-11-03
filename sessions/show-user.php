<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show Sessions</title>
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
    <h1>Show Sessions</h1>
    
    <?php
    session_start();

    if (isset($_SESSION["name"]) && isset($_SESSION["surname"])) {
      $fullName = $_SESSION["name"] . " " . $_SESSION["surname"];
    }
    else if (
      $_SERVER["REQUEST_METHOD"] == "POST" &&
      isset($_POST["name"]) &&
      isset($_POST["surname"])
    ) {
      $_SESSION = array();
      $fullName = $_POST["name"] . " " . $_POST["surname"];
    }
    else $fullName = "Anonymous";
    ?>

    <p>Welcome <?=$fullName?></p>
    <a href="change-user.php">Change user</a>

    <?php
    session_destroy();
    ?>
  </main>
</body>
</html>