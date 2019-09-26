<?php
    session_start();
    if(!isset($_SESSION["user"])){
    header("Location: ./");
    exit();
    }

    include './inc/header.php';

    if($_SESSION["is_admin"])
        include './admin/dashboard.php';
    else
        include './user/dashboard.php';

    include './inc/footer.php'
?>