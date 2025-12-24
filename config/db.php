<?php 

$env = parse_ini_file(__DIR__ . '/../.env');

$conn = new PDO(
    "mysql:host={$env['DB_HOST']};dbname={$env['DB_NAME']};charset=utf8mb4",
    $env['DB_USER'],
    $env['DB_PASS'],
    [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]
);

//check connection
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

?>
