<?php
    session_start();
    if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
        $_SESSION['canReview'] = false;
    } else {
        $_SESSION['canReview'] = true;
    }
?>