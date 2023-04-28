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
        $profile = Database::select("profile_setting", "*", "", "");
        $message = "";
        foreach ($result as $chat) {
            if ($chat['sender'] == 1) {
                $message .= '
                    <div class="chat-item reciever">
                        <img src="admin/uploads/profile/' . $profile[0]['image'] . '" alt="">
                        <div class="card bg-white text-black shadow-sm">' . $chat['message'] . '</div>
                    </div>
                ';
            } else {
                $message .= '
                    <div class="chat-item sender">
                        <div class="card bg-primary text-white shadow-sm">' . $chat['message'] . '</div>
                    </div>
                ';
            }
        }
        echo $message;
        break;
    case 'get-chat-admin':
        $cus_id = $_GET['cus_id'];
        $result = Database::select("chat AS c", "*", "INNER JOIN customer AS cus ON cus.id = c.cus_id", "WHERE c.cus_id = '$cus_id'");
        $profile = Database::select("profile_setting", "*", "", "");
        $message = "";
        foreach ($result as $chat) {
            if ($chat['sender'] == 1) {
                $message .= '
                    <div class="d-flex chat-message">
                        <div class="d-flex mb-2 justify-content-end flex-1">
                            <div class="w-100 w-xxl-75">
                                <div class="d-flex flex-end-center hover-actions-trigger">
                                    <div class="chat-message-content me-2">
                                        <div class="mb-1 sent-message-content light bg-primary rounded-2 p-3 text-white">
                                            <p class="mb-0">'.str_replace("admin/uploads/product","uploads/product",$chat['message']).'</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
            } else {
                $image = "uploads/customer/". $chat['image'];
                if($chat['type'] == "telegram") $image = $chat['image'];
                $message .= '
                    <div class="d-flex chat-message">
                        <div class="d-flex mb-2 flex-1">
                            <div class="w-100 w-xxl-75">
                                <div class="d-flex hover-actions-trigger">
                                    <div class="avatar avatar-m me-3 flex-shrink-0">
                                        <img class="rounded-circle" src="'.$image.'" alt="" />
                                    </div>
                                    <div class="chat-message-content received me-2">
                                        <div class="mb-1 received-message-content border rounded-2 p-3">
                                            <p class="mb-0">'.$chat['message'].'</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
            }
        }
        echo $message;
        break;
}
