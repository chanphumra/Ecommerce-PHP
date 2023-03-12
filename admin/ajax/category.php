<?php
    require_once "../lib/database.php";

    switch ($_GET['action']) {
        case 'insert':

            $request_body = file_get_contents('php://input');
            $data = json_decode($request_body, true);
           // Database::insert("category", array("name"), array("phumra"));
            echo "hi";
            break;

        case 'select':

            $result = Database::select("category", "id", "", "");
            echo json_encode($result);
            break;
    }

    
