<?php
require_once "../lib/database.php";
require_once "../../auth/token.php";
define('TOKEN_KEY', "051ecc732fcae9f5976a4549814f0db2199a244e4c70aef949090f237c8e24bd7648f4304296263a7811a3f5332fbdeb716fbee5e88af042843ff09704323308");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

switch ($_GET['action']) {
    case 'login':
        $email = $_POST['email'];
        $password = $_POST['password'];
        $table = "customer";
        $column = "*";
        $clause = "";
        $condition = "WHERE email = '$email' AND password = '$password'";
        $result = Database::select($table, $column, $clause, $condition);
        $message = array();

        /*======== found a user ========*/
        if (!empty($result)) {
            /*======== account verify success ========*/
            if ($result[0]['verify'] == 1) {
                $message[] = ["success" => true];
                $message[] = ["verify" => 1];

                $token = Token::Sign(["id" => $result[0]['id']], TOKEN_KEY);
                $message[] = ["token" => $token];
            }
            /*======== account not yet verify ========*/ else {
                $message[] = ["success" => true];
                $message[] = ["verify" => 0];
            }
        }
        /*======== not found a user ========*/ 
        else {
            $message[] = ["success" => false];
        }
        echo json_encode($message);
        break;
    case 'insert':
        $table = $_GET['table'];
        $fields = $values = array();

        if ($table == "customer") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            /*==== upload new image =====*/
            $image = time() . rand() . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/customer/" . $image);

            $fields = array("name", "email", "password", "image", "verify");
            $values = array($name, $email, $password, $image, "0");
        } else if ($table == "verify_account") {
            $cus_id = $_POST['cus_id'];
            $email = $_POST['email'];
            $OTP = $_POST['OTP'];
            $fields = array("cus_id", "email", "otp");
            $values = array($cus_id, $email, $OTP);
        }
        $lastInsertId = Database::insert($table, $fields, $values);
        echo json_encode(["success" => true, "lastInsertId" => $lastInsertId]);
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
        $table = $_GET['table'];
        $fields = json_decode($_GET['fields'], true);
        $values = json_decode($_GET['values'], true);
        $condition = $_GET['condition'];
        Database::update($table, $fields, $values, $condition);
        break;
    case 'updateVerify':
        $table = $_GET['table'];
        if ($table == "customer") {
            $email = $_POST['email'];
            $verify = $_POST['verify'];
            $fields = array("verify");
            $values = array($verify);
            Database::update($table, $fields, $values, "WHERE email='$email'");
        } else if ($table == "verify_account") {
            $email = $_POST['email'];
            $otp = $_POST['OTP'];
            $fields = array("otp");
            $values = array($otp);
            Database::update($table, $fields, $values, "WHERE email='$email'");
        }
        echo json_encode(['success' => true]);
        break;

    case 'delete':
        $table = $_GET['table'];
        $condition = $_GET['condition'];
        Database::delete($table, $condition);
        echo json_encode(['success' => true]);
        break;


    case 'sendOTP':
        require '../../vendor/autoload.php';
        $sendTo = $_POST['email'];
        $name = $_POST['name'];
        $mail = new PHPMailer(true);
        try {
            //Enable verbose debug output
            $mail->SMTPDebug = 0; //SMTP::DEBUG_SERVER;

            //Send using SMTP
            $mail->isSMTP();

            //Set the SMTP server to send through
            $mail->Host = 'smtp.gmail.com';

            //Enable SMTP authentication
            $mail->SMTPAuth = true;

            //SMTP username
            $mail->Username = 'bazaar.shop.cambodia@gmail.com';

            //SMTP password
            $mail->Password = 'irlamklpdfobvuto';

            //Enable TLS encryption;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

            //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            $mail->Port = 587;

            //Recipients
            $mail->setFrom('bazaar.shop.cambodia@gmail.com', 'Bazaar Shop Cambodia');

            //Add a recipient
            $mail->addAddress($sendTo, $name);

            //Set email format to HTML
            $mail->isHTML(true);

            $verification_code = $_POST['OTP'];

            $mail->Subject = 'Email verification';
            $mail->Body    = '<!DOCTYPE html>
            <html lang="en" >
                <head>
                    <meta charset="UTF-8">
                    <title>BAZAAR SHOP- EMAIL VERIFICATION</title>
                </head>
                <body>
                    <div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
                        <div style="margin:50px auto;width:70%;padding:20px 0">
                            <div style="border-bottom:1px solid #eee">
                                <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">Bazaar shop</a>
                            </div>
                            <p style="font-size:1.1em">Hi,</p>
                            <p>Thank you for choosing Bazaar shop. Use the following OTP to verifycation your account.</p>
                            <h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">' . $verification_code . '</h2>
                            <p style="font-size:0.9em;">Regards,<br />Bazaar shop</p>
                            <hr style="border:none;border-top:1px solid #eee" />
                            <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
                                <p>Koding shop online</p>
                                <p>Ecommerce in cambodia</p>
                            </div>
                        </div>
                    </div>
                </body>
            </html>';

            $mail->send();
            echo json_encode(["success" => true]);
        } catch (\Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        break;
    case 'verifyToken':
        $token = $_GET['token'];
        $verify = Token::Verify($token, TOKEN_KEY);
        $id = $verify['id'];
        $result = Database::select("customer", "*", "", "WHERE id=" . $id);
        echo json_encode($result);
        break;

    case 'logout':
        session_start();
        if (isset($_SESSION['token'])) unset($_SESSION['token']);
        setcookie('token', '', time() - 3600, '/');
        setcookie('telegram_id', '', time() - 3600, '/');
        break;
}
