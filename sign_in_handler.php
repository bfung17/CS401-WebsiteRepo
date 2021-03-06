<?php

    session_start();

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $errors = array();

    require_once 'Dao.php';
    $dao = new Dao();

    $_SESSION['authenticated'] = $dao->userExist($email, $password);

    if ($_SESSION['authenticated']) {
        if($_SESSION['prevPage'] == 'sign_up.php') {
            header('Location: homepage.php');
            $_SESSION['user'] = $email;
            unset($_SESSION['signinForm']);
            exit;
        } else {
            header('Location: ' . $_SESSION['prevPage']);
            $_SESSION['user'] = $email;
            unset($_SESSION['signinForm']);
            exit;
        }

    } else {
        header('Location: sign_in.php');
        $_SESSION['signinError'] = "Invalid email address or password.";
        $_SESSION['signinForm'] = $_POST;
        exit;
    }

    

