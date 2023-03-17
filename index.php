<?php
include "include/partials/head.php";
include "include/partials/header.php";
include "include/partials/navbar.php";

require "config/init.php";

$controller = $_GET['page_name'] ?? "home";
$controller = strtolower($controller);

if (file_exists("controller/$controller.php")) {
    require "controller/$controller.php";
} else {
    echo "controller not found";
}

include "include/partials/footer.php";
hello