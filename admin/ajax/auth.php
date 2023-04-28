<?php
require_once "../lib/database.php";
require_once "../../auth/token.php";
define('TOKEN_KEY', "051ecc732fcae9f5976a4549814f0db2199a244e4c70aef949090f237c8e24bd7648f4304296263a7811a3f5332fbdeb716fbee5e88af042843ff09704323308");

session_start();
switch ($_GET['action']) {
    case 'rememberToken':
        setcookie('token', $_GET['token'], time() + 30 * 24 * 60 * 60, '/');
        /*=========== remove another auth==========*/
        if (isset($_SESSION['token'])) unset($_SESSION['token']);
        setcookie('telegram_id', '', time() - 3600, '/');
        break;
    case 'notRememberToken':
        $_SESSION['token'] = $_GET['token'];
        /*=========== remove another auth==========*/
        setcookie('token', '', time() - 3600, '/');
        setcookie('telegram_id', '', time() - 3600, '/');
        break;

    case 'getUser':
        if (isset($_COOKIE['token'])) {
            $token = $_COOKIE['token'];
            $verify = Token::Verify($token, TOKEN_KEY);
            $id = $verify['id'];
            $result = Database::select("customer", "*", "", "WHERE id=" . $id);
            echo json_encode(['user' => $result, 'success' => true]);
        } 
        else if (isset($_SESSION['token'])) {
            $token = $_SESSION['token'];
            $verify = Token::Verify($token, TOKEN_KEY);
            $id = $verify['id'];
            $result = Database::select("customer", "*", "", "WHERE id=" . $id);
            echo json_encode(['user' => $result, 'success' => true]);
        } 
        else if (isset($_COOKIE['telegram_id'])) {
            $result = Database::select('customer', '*', '', 'WHERE telegram_id = '. $_COOKIE['telegram_id']);
            echo json_encode(['user' => $result, 'success' => true]);
        }
        else {
            echo json_encode(['user' => [], 'success' => false]);
        }
        break;
}
