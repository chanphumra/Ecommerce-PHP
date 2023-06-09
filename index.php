<?php
session_start();
unset($_SESSION['admin']);
require_once "config/init.php";
include_once "include/partials/head.php";
include_once "include/partials/header.php";
include_once "include/partials/navbar.php";

$include = $_GET['page_name'] ?? "home";
$include = strtolower($include);

if (file_exists("include/$include.php")) {
    include_once "include/$include.php";
    include_once "chat/chat.php";
} else {
    echo "include not found!";
}

include_once "include/partials/footer.php";
