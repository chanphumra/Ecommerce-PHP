<?php
    function View($view)
    {
        if (file_exists("include/$view.php")) {
            return "include/$view.php";
        } else {
            echo "View not found";
        }
    }

    function redirect($page)
    {
        header("Location: index.php?page_name=" . $page);
        die;
    }
