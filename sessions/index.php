<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Start Sessions</title>
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
    <h1>Start Sessions</h1>
    
    <?php
    session_start();

    $name = "Pablo";
    $surname = "Cru";

    // $_SESSION[<name>] = "<value>";
    $_SESSION["name"] = $name;
    $_SESSION["surname"] = $surname;

    $fullName = $name . " " . $surname;
    ?>

    <p>User "<?=$fullName?>" has been created</p>

    <a href="show-user.php">Take a look</a> |
    <a href="change-user.php">Change user</a>
  </main>
</body>
</html>