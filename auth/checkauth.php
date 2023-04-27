<?php 
    if(isset($_SESSION['token']) || isset($_COOKIE['token']) || isset($_COOKIE['telegram_id'])){
        header("location: ../index.php");
        exit();
    }