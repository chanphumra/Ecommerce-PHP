<?php
    require_once "../lib/database.php";

    switch ($_GET['action']) {
        case 'insert':
            // $request_body = file_get_contents('php://input');
            // $data = json_decode($request_body, true);
          //  $images = $_FILES['images']['tmp_name'];

            $table = "category";
            $fields = array("");
            $values = array("");
           // Database::insert($table, $fields, $values);
            if(!empty($_FILES)) echo $_FILES['file']['tmp_name'];
            break;

        case 'select':
            $result = Database::select("category", "*", "", "");
            echo json_encode($result);
            break;
    }

    
