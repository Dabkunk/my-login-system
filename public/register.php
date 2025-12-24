<?php
session_start();
require '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare(
        "INSERT INTO users (username, email, password) VALUES (?, ?, ?)"
    );
    $stmt->execute([$username, $email, $password]);

    $userId = $conn->lastInsertId();

    $_SESSION['user_id']  = $userId;
    $_SESSION['username'] = $username;

    header("Location: index.php");
    exit;
}
?>

<form method="POST">
    <input type="text" name="username" required>
    <input type="email" name="email" required>
    <input type="password" name="password" required>
    <button>Register</button>
</form>