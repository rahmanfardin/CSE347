<?php

$host = 'localhost';
$dbname = 'userinfo';
$dbusername = 'root';
$dbpassword = '';

try {
    $pdo = new PDO("mysql:host = $host; dbname = $dbname", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo"$pdo";
} catch (PDOException $e) {
   die('conncet failed: ' . $e->getMessage());
}