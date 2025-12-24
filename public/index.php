<?php 
session_start();
require_once '../config/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game page</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Welcome, <?= htmlspecialchars($_SESSION['username'] ?? 'guest'); ?>!</h1>
    <a href="../public/register.php"><?php echo 'Sign in <br />';?></a> 
    <a href="../public/login.php"><?php echo 'log in <br />';?></a>
    <a href="../logout.php"><?php echo 'log out <br />';?></a>
    <a href="../public/dashboard.php">back to main page</a>
</body>
</html>