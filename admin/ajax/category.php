<?php
require_once "../lib/database.php";

switch ($_GET['action']) {
    case 'insert':
        // $request_body = file_get_contents('php://input');
        // $data = json_decode($request_body, true);
        $name = $_POST['name'];
        $description = $_POST['description'];
        $image = $image_name = $tmp_name = $main_check = "";
        if (isset($_FILES['image'])) { $image = $_FILES['image']; $tmp_name = $image['tmp_name']; $image_name = $image['name']; }
        if (isset($_POST['main-check'])) $main_check = $_POST['main-check'];


        // insert to main category
        if (!empty($main_check)) {
            $table = "main_category";
            $fields = array("name", "description", "image");
        
            if (Database::isExist($table, "name = '$name'")) {
                $result = array("success" => false, "message" => "Category already exist");
                echo json_encode($result);
                return;
            }
            // upload image
            $new_name = time().rand().$image_name;
            move_uploaded_file($tmp_name, "../uploads/category/". $new_name);
            // inseret to database
            $values = array($name, $description, $new_name);
            $lastInsertId = Database::insert($table, $fields, $values);
            $result = array("lastInsertId" => $lastInsertId, "success" => true);
            echo json_encode($result);
        }

        // insert to sub category
        else{
            $mainId = $_POST['mainCategory'];
            $table = "sub_category";
            $fields = array("main_id", "name", "description", "image");
            
            if (Database::isExist($table, "name = '$name'")) {
                $result = array("success" => false, "message" => "Category already exist");
                echo json_encode($result);
                return;
            }
            // upload image
            $new_name = time().rand().$image_name;
            move_uploaded_file($tmp_name, "../uploads/category/". $new_name);
            // inseret to database  
            $values = array($mainId, $name, $description, $new_name);
            $lastInsertId = Database::insert($table, $fields, $values);
            $result = array("lastInsertId" => $lastInsertId, "success" => true);
            echo json_encode($result);
        }
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
