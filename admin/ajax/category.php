<?php
    require_once "../lib/database.php";

    switch ($_GET['action']) {
        case 'insert':
            // $request_body = file_get_contents('php://input');
            // $data = json_decode($request_body, true);
            $name = $_POST['name'];
            $description = $_POST['description'];
            $image1 = $image2 = $image3 = "";
            if(isset($_FILES['image1']) || isset($_FILES['image2']) || isset($_FILES['image3'])){
                $image1 = $_FILES['image1'];
                $image2 = $_FILES['image2'];
                $image3 = $_FILES['image3'];
            }

            $table = "category";
            $fields = array("name");
            $values = array($name);
            if(Database::isExist($table, "name = 'men'")){
                $result = array("success" => false);
                echo json_encode($result);
                return;
            }
            $row = Database::insert($table, $fields, $values);
            $result = array("list" => $row ,"success" => true);
            echo json_encode($result);
            break;

        case 'select':
            $result = Database::select("category", "*", "", "");
            echo json_encode($result);
            break;
    }

    
