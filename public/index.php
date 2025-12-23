<?php require_once '../includes/auth.php'; ?>
<h1>Welcome, <?= htmlspecialchars($_SESSION['username']) ?>!</h1>
<a href="../logout.php">Logout</a>