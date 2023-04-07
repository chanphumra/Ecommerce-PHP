<?php
require_once "../lib/database.php";

switch ($_GET['action']) {
    case 'select':
        $table = $_GET['table'];
        $column = $_GET['column'];
        $condition = $_GET['condition'] ?? "";
        $clause = $_GET['clause'] ?? "";

        $result = Database::select($table, $column, $clause, $condition);
        echo json_encode($result);
        break;

    case 'update':
        $name = $_POST['name'];
        $city = $_POST['city'];
        $country = $_POST['country'];
        $phone = $_POST['phone'];
        $email = $_POST['emails'];
        $table = $_GET['table'];
        $id = $_GET['id'];
        $image = "";
        $fields = $values = array();

        if (isset($_FILES['image'])) {
            /*==== delete old image =====*/
            $resultImage = Database::select($table, "image", "", "WHERE id = $id");
            foreach ($resultImage as $oldImage) {
                unlink('../uploads/profile/' . $oldImage['image']);
            }

            /*==== upload new image =====*/
            $image = time() . rand() . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/profile/" . $image);

            $fields = array("name", "city", "country", "phone", "email", "image");
            $values = array($name, $city, $country, $phone, $email, $image);
        } else {
            $fields = array("name", "city", "country", "phone", "email");
            $values = array($name, $city, $country, $phone, $email);
        }
        /*==== update database =====*/
        Database::update($table, $fields, $values, "WHERE id = " . $id);
        echo json_encode(array("success" => true));
        break;
}
