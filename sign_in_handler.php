<?php

    session_start();

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $errors = array();

    require_once 'Dao.php';
    $dao = new Dao();

    $_SESSION['authenticated'] = $dao->userExist($email, $password);

    if ($_SESSION['authenticated']) {
        header('Location: homepage.php');
        unset($_SESSION['signinForm']);
        exit;
    } else {
        header('Location: sign_in.php');
        $_SESSION['signinError'] = "Invalid email address or password.";
        $_SESSION['signinForm'] = $_POST;
        exit;
    }

    

