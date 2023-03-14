<?php
    require_once "../lib/database.php";

    switch ($_GET['action']) {
        case 'insert':
            // $request_body = file_get_contents('php://input');
            // $data = json_decode($request_body, true);

            $image1 = $image2 = $image3 = "";
            if(isset($_FILES['image1']) || isset($_FILES['image2']) || isset($_FILES['image3'])){
                $image1 = $_FILES['image1'];
                $image2 = $_FILES['image2'];
                $image3 = $_FILES['image3'];
            }

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

    
