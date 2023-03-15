<?php
    require_once "../lib/database.php";

    switch ($_GET['action']) {
        case 'insert':
            // $request_body = file_get_contents('php://input');
            // $data = json_decode($request_body, true);
            $name = $_POST['name'];
            $description = $_POST['description'];
            $image1 = $main_check = "";
            if(isset($_FILES['image1'])) $image1 = $_FILES['image1'];
            if(isset($_POST['main_check'])) $main_check = $_POST['main_check'];

            $table = "category";
            $fields = array("name");
            $values = array($name);
            if(Database::isExist($table, "name = '$name'")){
                $result = array("success" => false);
                echo json_encode($result);
                return;
            }
            $lastInsertId = Database::insert($table, $fields, $values);
            $result = array("lastInsertId" => $lastInsertId ,"success" => true);
            echo json_encode($result);
            break;

        case 'select':
            $table = $_GET['table'];
            $column = $_GET['column'];
            $condition = $_GET['condition'] ?? "";
            $clause = $_GET['clause'] ?? "";

            $result = Database::select($table, $column, $condition, $clause);
            echo json_encode($result);
            break;
    }

    
