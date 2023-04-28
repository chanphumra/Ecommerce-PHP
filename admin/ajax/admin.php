<?php
require_once "../lib/database.php";

switch ($_GET['action']) {
    case 'select':
        $table = $_GET['table'];
        $column = $_GET['column'];
        $condition = $_GET['condition'] ?? "";
        $clause = $_GET['clause'] ?? "";

        $result = Database::select($table, $column, $clause, $condition);
        if(!empty($result)) 
            echo json_encode(["success"=> true, "result" => $result]);
        else
            echo json_encode(["success"=> false]);
        break;
}