<?php
require_once "../lib/database.php";

switch ($_GET['action']) {
    case 'insert':
        $table = $_GET['table'];
        $fields = json_decode($_POST['fields'], true);
        $values = json_decode($_POST['values'], true);
        $lastInsertId = Database::insert($table, $fields, $values);
        echo json_encode(["success"=>true, "lastInsertId"=> $lastInsertId]);
        break;
    case 'select':
        $table = $_GET['table'];
        $column = $_GET['column'];
        $clause = $_GET['clause'] ?? ""; 
        $condition = $_GET['condition'] ?? "";
        $result = Database::select($table, $column, $clause, $condition);
        echo json_encode($result); 
        break;
    case 'update':
        $table = $_GET['table'];
        $fields = json_decode($_POST['fields'], true);
        $values = json_decode($_POST['values'], true);
        $condition = $_GET['condition'];
        Database::update($table, $fields, $values, $condition);
        break;
}