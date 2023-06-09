<?php
    session_start();
    if(!isset($_SESSION['admin'])) {
        header("location: auth/login.php");
        exit();
    }
    require_once "config/init.php";
    $include = $_GET['page_name'] ?? "home";
    $include = strtolower($include);
    if(file_exists("include/$include.php")) {
?>

<?php include "include/partials/head.php" ?>

<main class="main" id="top">
    <div class="container-fluid px-0" data-layout="container">
        <?php include_once "include/partials/navbar.php" ?>

        <?php include_once "include/partials/navbartop.php" ?>

        <?php include_once "include/$include.php" ?>
    </div>
</main>

<?php 
        include_once "include/partials/footer.php"; 
    }
    else{
        include_once "include/404.php";
    }
?>

