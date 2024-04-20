<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: loggin.php");
    exit;
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    include "includes/db.inc.php";
    if (!isset($_SERVER["id"])) {
        
    }
    $id = $_GET["id"];
    
    $sql = "DELETE FROM `todo` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    header("location: showtodo.php");
}