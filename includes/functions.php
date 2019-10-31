<?php

function secureInput($notsafestring){
    return htmlspecialchars(strip_tags($notsafestring));
}

function login($username,$password){
    $username = htmlspecialchars(strip_tags($username));
    $password = hash('sha256', htmlspecialchars(strip_tags($password)));

    if($username == "admin" && $password=="2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e73043362938b9824"){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        return true;
    }else{
        return false;
    }
}

?>