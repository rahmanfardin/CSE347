<?php

declare(strict_types= 1); //for debugging 

function getUsername (object $pdo, string $username){
    $q = "SELECT  `username` FROM `usertable` WHERE username = $username;";
    $stmt = $pdo->prepare($q); //prevents SQL injection
    
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getEmail (object $pdo, string $email){
    $q = "SELECT  `email` FROM `usertable` WHERE email = $email;";
    $stmt = $pdo->prepare($q); //prevents SQL injection

    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}