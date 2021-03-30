<?php

    session_start();
    if(!$_SESSION['canReview']){
        header('Location: sign_in.php');
        exit;
    }

    switch($_SESSION['currentPage'])
    {
        case("chocolate_cake_item.php"):
            $id = "1";
            break;
        case("german_chocolate_cake_item.php"):
            $id = "2";
            break;
        case("wedding_cake_item.php"):
            $id = "3";
            break;
    }

    $user = $_SESSION['user'];
    $review = htmlspecialchars($_POST['review']);

    require_once 'Dao.php';
    $dao = new Dao();
    $dao->insertReview($id,$user,$review);

    header('Location: '.$_SESSION['currentPage']);
    exit;