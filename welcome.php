<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
body {
  background-image: url('abc.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  background-position: center;
  display: flex;
  align-items: center;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    
        <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
        <a href="logout.php" ><h1>Logout</h1>></a>
</body>
</html>