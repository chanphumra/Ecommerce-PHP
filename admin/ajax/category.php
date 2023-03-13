<?php
    require_once "../lib/database.php";

    switch ($_GET['action']) {
        case 'insert':
            // $request_body = file_get_contents('php://input');
            // $data = json_decode($request_body, true);
            $name = $_POST['name'];

          //  Database::insert("category", array("name"), array("phumra"));
            echo $name;
            break;

        case 'select':
            $result = Database::select("category", "*", "", "");
            echo json_encode($result);
            break;
    }

    
