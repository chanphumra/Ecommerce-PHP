<?php
    require_once "../lib/database.php";

    switch ($_GET['action']) {
        case 'insert':
            // $request_body = file_get_contents('php://input');
            // $data = json_decode($request_body, true);
            $image1 = $_FILES['image1'];

            $table = "category";
            $fields = array("");
            $values = array("");
           // Database::insert($table, $fields, $values);
            if(!empty($_FILES)) echo json_encode($image1);
            break;

        case 'select':
            $result = Database::select("category", "*", "", "");
            echo json_encode($result);
            break;
    }

    
