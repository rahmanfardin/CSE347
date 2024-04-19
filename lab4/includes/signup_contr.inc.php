<?php
//! DO SOMTHING WITH USER DATA
declare(strict_types= 1); //for debugging 

function isInputEmpty(string $name, string $email, string $username, string $password){
    if(empty($name) || empty($email) || empty($username) || empty($password)){
        return true;
    }else{
        return false;
    }
}

function isEmailInvalid(string $email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }
}

function isUsernameTaken(object $pdo, string $username){
    if(getUsername ($pdo, $username)){
        return true;
    }else{
        return false;
    }
}

function isEmailRegistered(object $pdo, string $email){
    if(getEmail ($pdo, $email)){
        return true;
    }else{
        return false;
    }
}