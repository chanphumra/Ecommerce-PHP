<?php
require_once "../lib/database.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

switch ($_GET['action']) {
    case 'insert':
        $table = $_GET['table'];
        if($table == "customer"){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $image = $_FILES['image'];
        }
        else{

        }
        break;

    case 'sendOTP':
        require '../../vendor/autoload.php';
        $sendTo = $_POST['email'];
        $name = $_POST['name'];
        $mail = new PHPMailer(true);
        try {
            //Enable verbose debug output
            $mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;

            //Send using SMTP
            $mail->isSMTP();

            //Set the SMTP server to send through
            $mail->Host = 'smtp.gmail.com';

            //Enable SMTP authentication
            $mail->SMTPAuth = true;

            //SMTP username
            $mail->Username = 'bazaar.shop.cambodia@gmail.com';

            //SMTP password
            $mail->Password = 'hjskdopbijilhfpr';

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
                            <h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">'.$verification_code.'</h2>
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
}