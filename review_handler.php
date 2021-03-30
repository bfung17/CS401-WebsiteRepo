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
        case("bridal_cake_item.php"):
            $id = "4";
            break;
        case("truffle_item.php"):
            $id = "5";
            break;
        case("blueberry_pie_item.php"):
            $id = "6";
            break;
        case("keylime_pie_item.php"):
            $id = "7";
            break;
        case("cinnamonroll_item.php"):
            $id = "8";
            break;
        case("braided_bread_item.php"):
            $id = "9";
            break;
        case("focaccia_bread_item.php"):
            $id = "10";
            break;
        case("cookies_item.php"):
            $id = "11";
            break;
    }

    $user = $_SESSION['user'];
    $review = htmlspecialchars($_POST['review']);

    require_once 'Dao.php';
    $dao = new Dao();
    $dao->insertReview($id,$user,$review);

    header('Location: '.$_SESSION['currentPage']);
    exit;