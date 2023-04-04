<?php
require_once "../lib/database.php";

switch ($_GET['action']) {
    case 'insert':
        $cus_id = $_POST['cus_id'];
        $message = $_POST['message'];
        $sender = $_POST['sender'];
        Database::insert("chat", array("cus_id", "message", "sender"), array($cus_id, $message, $sender));
        break;
    case 'get-chat':
        $cus_id = $_GET['cus_id'];
        $result = Database::select("chat", "*", "", "WHERE cus_id = '$cus_id'");
        $message = "";
        foreach ($result as $chat) {
            if($chat['sender'] == 1){
                $message .= '
                    <div class="chat-item reciever">
                        <img src="" alt="">
                        <div class="card bg-white text-black shadow-sm">'.$chat['message'].'</div>
                    </div>
                ';
            }
            else{
                $message .= '
                    <div class="chat-item sender">
                        <div class="card bg-primary text-white shadow-sm">'.$chat['message'].'</div>
                    </div>
                ';
            }
        }
        echo $message;
        break;
}