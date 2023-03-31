<?php
require_once "../admin/lib/database.php";
define('BOT_TOKEN', '6250044964:AAE733GXhz7MI5S6ni3Xq1AIwqvbypW72gE');
session_start();

function checkTelegramAuthorization($auth_data)
{
    $check_hash = $auth_data['hash'];
    unset($auth_data['hash']);
    $data_check_arr = [];
    foreach ($auth_data as $key => $value) {
        $data_check_arr[] = $key . '=' . $value;
    }
    sort($data_check_arr);
    $data_check_string = implode("\n", $data_check_arr);
    $secret_key = hash('sha256', BOT_TOKEN, true);
    $hash = hash_hmac('sha256', $data_check_string, $secret_key);
    if (strcmp($hash, $check_hash) !== 0) {
        throw new Exception('Data is NOT from Telegram');
    }
    if ((time() - $auth_data['auth_date']) > 86400) {
        throw new Exception('Data is outdated');
    }
    return $auth_data;
}

// User authentication - function
function userAuthentication($auth_data) {
    // Creating user - function
    function createNewUser($auth_data) {
        $name = $auth_data['first_name']. " ". $auth_data['last_name'];
        $image = $auth_data['photo_url'] ?? "";
        $verify = 1;
        $type = "telegram";
        $telegram_id = $auth_data['id'];

        $table = "customer";
        $fields = array("name", "image", "verify", "type", "telegram_id");
        $values = array($name, $image, $verify, $type, $telegram_id);
        
        Database::insert($table, $fields, $values);
    }

    // Updating user - function
    function updateExistedUser($auth_data) {
        $name = $auth_data['first_name']. " ". $auth_data['last_name'];
        $image = $auth_data['photo_url'] ?? "";
        $telegram_id = $auth_data['id'];

        $table = "customer";
        $fields = array("name", "image");
        $values = array($name, $image);
        $condition = "WHERE telegram_id = '$telegram_id'";
        Database::update($table, $fields, $values, $condition);
    }

    // User checker - function
    function checkUserExists($auth_data) {
        // Get the user Telegram ID
        $target_id = $auth_data['id'];
        
        $isUser = Database::select("customer", "telegram_id", "", "WHERE telegram_id = '$target_id'");

        // Return true if the user exists in database
        if (!empty($isUser) && $isUser[0]['telegram_id'] === $target_id) {
            return true;
        }
        return false;
    }

    // Check the user
    if (checkUserExists($auth_data)) {
        // User found, so update it
        updateExistedUser($auth_data);
    } else {
        // User not found, so create it
        createNewUser($auth_data);
    }

    // Create logged in user session
    $_SESSION['telegram_id'] = $auth_data['id'];
}


try {
    // Get the authorized user data from Telegram widget
    $auth_data = checkTelegramAuthorization($_GET);

    // Authenticate the user
    userAuthentication($auth_data);

    // goto home page
    header('Location: ../index.php');
} catch (Exception $e) {
    // Display errors
    die($e->getMessage());
}
