<?php 

class Database {

    private static $host = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $dbName = "ecommerce_php";

    public static function connect()
    {
        try{
            $pdo = new PDO("mysql:host=" . Database::$host . "; dbname=" . Database::$dbName, Database::$username, Database::$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public static function insert ($table, $fields, $values)
    {
        if(empty($table) || count($fields) <= 0 || count($values) <= 0) return;
        if(count($fields) != count($values) ) return;

        $pdo = Database::connect();
        $sql = "INSERT INTO $table (". implode(",", $fields) .") VALUES (:" . implode(',:', $fields) . ")";
        $stmsql = $pdo->prepare($sql);

        for ($i=0; $i < count($fields); $i++) 
        { 
            $stmsql->bindParam(":$fields[$i]", $values[$i]);
        }
        $stmsql -> execute();
        return $pdo->lastInsertId();
    }

    public static function select ($table, $column, $clause, $condition)
    {
        if(empty($table)) return;

        $sql = "SELECT $column FROM $table $clause $condition";
        $stmsql = Database::connect() -> query($sql);
        return $stmsql->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function delete ($table, $condition)
    {
        if(empty($table)) return;

        $sql = "DELETE FROM $table $condition";
        $stmsql = Database::connect()->prepare($sql);
        $stmsql-> execute();
    }

    public static function update ($table, $fields, $values, $condition)
    {
        if(empty($table) || count($fields) <= 0 || count($values) <= 0) return;
        if(count($fields) != count($values) ) return;

        $sql = "UPDATE $table SET ";
        for ($i=0; $i < count($fields); $i++) 
        { 
            if($i < count($fields) - 1)
                $sql .= "$fields[$i] = '$values[$i]'" . ",";
            else
                $sql .= "$fields[$i] = '$values[$i]' "; 
        }
        $sql .= $condition;
        $stmsql = Database::connect()->prepare($sql);
        $stmsql -> execute();
    }

    public static function isExist ($table, $condition)
    {
        if(empty($table)) return;

        $sql = "SELECT * FROM $table WHERE $condition";
        $stmsql = Database::connect() -> query($sql);
        return $stmsql -> rowCount() > 0;
    }
}