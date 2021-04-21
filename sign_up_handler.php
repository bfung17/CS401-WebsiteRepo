<?php

    echo("yeet");
    session_start();

    include_once("Dao.php");
    $dao = new Dao();

    
    $email = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['password']);
    $passMatch = htmlspecialchars($_POST['passwordMatch']);
    $regex = "/^([a-zA-Z0-9-.]+)@([a-zA-Z0-9-.]+).([a-zA-Z]{2,5})$/";
    $errors = array();
    

    if (!preg_match($regex, $email)) {
        $errors['emailError'] = "Enter a valid email address.";
    } else if (strlen($email) > 255) {
        $errors['emailError'] = "Too long, must be less than 255 characters.";
    } else if ($dao->checkEmail($email)) {
        $errors['emailError'] = "User already exists.";
    }


    if(strlen($pass) < 6) {
        $errors['passError'] = "Too short, must be more than 6 characters.";
    } else if (strlen($pass) > 64) {
        $errors['passError'] = "Too long, must be less than 64 characters.";
    }

    if ($pass != $passMatch){
        $errors['passMatchError'] = "Passwords do not match.";
    }

    if(count($errors) == 0) {
        //$hashPass = hash('sha256',$pass);
        $dao->addProfile($email, $pass);
        unset($_SESSION['form']);
        header('Location: sign_in.php');
    } else {
        if ($errors['emailError']) {
            $_SESSION['emailError'] = $errors['emailError'];
            $_SESSION['form'] = $_POST;
        }
        if ($errors['passError']) {
            $_SESSION['passError'] = $errors['passError'];
            $_SESSION['form'] = $_POST;
        }
        if ($errors['passMatchError']) {
            $_SESSION['passMatchError'] = $errors['passMatchError'];
            $_SESSION['form'] = $_POST;
        }
        header('Location: sign_up.php');
    }


    