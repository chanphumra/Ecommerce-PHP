<?php
require_once "../lib/database.php";

switch ($_GET['action']) {
    case 'insert':
        $subId = $_POST['subId'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $sale_price = $_POST['sale_price'];
        $qty = $_POST['qty'];
        $discount = $_POST['discount'];
        $image1 = $image2 = $image3 = "";
        $images = array($_FILES['image1'], $_FILES['image2'], $_FILES['image3']);

        for ($i=0; $i < count($images); $i++) { 
            $tmp_name = $images[$i]['tmp_name'];
            $new_name = time().rand().$images[$i]['name'];
            if($i==0) $image1 = $new_name;
            if($i==1) $image2 = $new_name;
            if($i==2) $image3 = $new_name;
            move_uploaded_file($tmp_name, "../uploads/product/". $new_name);
        }

        $fields = array("sub_id", "name", "description", "price", "sale_price", "qty", "discount", "image1", "image2", "image3");
        $values = array($subId, $name, $description, $price, $sale_price, $qty, $discount, $image1, $image2, $image3);
        $lastInsertId = Database::insert("product", $fields, $values);
        $result = array("lastInsertId" => $lastInsertId, "success" => true);
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