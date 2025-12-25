<?php 

session_start();
session_destroy();
header("Location: ../Games/index.php");
exit;

?>