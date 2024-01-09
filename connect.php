<?php
$serverName = 'localhost';
$userName = 'root';
$userPassword = ''; //Lab room 408 or 409 - 12345678
$dbname = 'business';

try {
    $conn = new PDO(
        "mysql:host=$serverName;dbname=$dbname;charset=UTF8",
        $userName,
        $userPassword
    );

    echo "You are now connecting database!!";
} catch (PDOException $e) {
    echo 'Sorry! You cannot connect to database: ' . $e->getMessage();
}
