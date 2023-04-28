<?php
require_once "../lib/database.php";

switch ($_GET['action']) {
    case 'insert':
        $name = $_POST['name'];
        $description = $_POST['description'];
        $link = $_POST['link'];
        $image = $image_name = $tmp_name = $enable = "";
        if (isset($_FILES['image'])) {
            $image = $_FILES['image'];
            $tmp_name = $image['tmp_name'];
            $image_name = $image['name'];
        }
        if (isset($_POST['enable'])) {
            $enable = $_POST['enable'];
            $enable = $enable == "on" ? 1 : 0;
        }

        // upload image
        $new_name = time() . rand() . $image_name;
        move_uploaded_file($tmp_name, "../uploads/slideshow/" . $new_name);

        // inseret to database
        $fields = array("title", "text", "link", "image", "enable");
        $values = array($name, $description, $link, $new_name, $enable);
        $lastInsertId = Database::insert("slideshow", $fields, $values);
        $result = array("lastInsertId" => $lastInsertId, "success" => true);
        echo json_encode($result);
        break;
    case 'select':
        $table = $_GET['table'];
        $column = $_GET['column'];
        $condition = $_GET['condition'] ?? "";
        $clause = $_GET['clause'] ?? "";

        $result = Database::select($table, $column, $clause, $condition);
        echo json_encode($result);
        break;
    case 'update':
        $id = $_GET['id'];
        $title = $_POST['title'];
        $text = $_POST['text'];
        $link = $_POST['link'];
        $enable = "";
        if (isset($_POST['enable'])) {
            $enable = $_POST['enable'];
            $enable = $enable == "on" ? 1 : 0;
        }
        $fields = $values = array();

        if(isset($_FILES['image'])){
            /*==== delete old image =====*/
            $resultImage = Database::select("slideshow", "image", "", "WHERE id = $id");
            foreach ($resultImage as $oldImage) {
                unlink('../uploads/slideshow/'. $oldImage['image']);
            }

            /*==== upload new image =====*/
            $image = time().rand().$_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/slideshow/". $image);
            $fields = array("title", "text", "link", "image", "enable");
            $values = array($title, $text, $link, $image, $enable);
        }
        else{
            $fields = array("title", "text", "link", "enable");
            $values = array($title, $text, $link, $enable);
        }
        Database::update("slideshow", $fields, $values, "WHERE id = ". $id);
        echo json_encode(array("success"=> true));
        break;
    case 'updateEnable':
        $id = $_GET['id'];
        $enable = $_GET['enable'];
        Database::update("slideshow", array("enable"), array($enable), "WHERE id = $id");
        break;
    case 'delete':
        $id = $_GET['id'];
        /*==== delete old image =====*/
        $resultImage = Database::select("slideshow", "image", "", "WHERE id = $id");
        foreach ($resultImage as $oldImage) {
            unlink('../uploads/slideshow/' . $oldImage['image']);
        }
        /*==== delete from database =====*/
        Database::delete("slideshow", "WHERE id = $id");
        echo json_encode(array("success" => true));
        break;
}
