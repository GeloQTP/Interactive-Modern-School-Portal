<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php'; // to load the contents of the env file into this file (everything inside the vendor including the phpmailer)
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $mail = new PHPMailer(true);

    try {

        // Server Settings
        $mail->isSMTP();
        $mail->Host = $_ENV["SMTP_HOST"]; //getenv("SMTP_HOST"); <- alternate way of calling environmental variables
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV["SMTP_USER"];
        $mail->Password = $_ENV["SMTP_PASS"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = $_ENV["SMTP_PORT"];

        // Recipients
        $mail->setFrom($_ENV["SMTP_USER"], "DFSquid");
        $mail->addAddress($_ENV["SMTP_USER"], "DFSquid");


        // Mail
        $mail->isHTML(true); // to make the PHPMailer accept html format

        $mail->Subject = "New Message from Your Portfolio Website";

        $mail->Body = "
        <div style='font-family: Arial, sans-serif; color: #333; line-height: 1.6;'>
        <h2 style='color: #2c3e50;'>📩 You’ve received a new message</h2>
        <p><strong>FROM:</strong> {$senderName}</p>
        <p><strong>SENDER EMAIL:</strong> {$senderEmail}</p>
        <p><strong>MESSAGE:</strong></p>

        <blockquote style='border-left: 4px solid #2c3e50; margin: 10px 0; padding: 10px; background: #f9f9f9;'>
        {$senderMessage}
        </blockquote>

        <hr>
        <p style='font-size: 12px; color: #777;'>This message was sent from your portfolio’s contact form.</p>
        </div>
";

        $mail->AltBody = "New Message from Your Portfolio Website\n\n" // This is caption youll see before you open an email.
            . "From: $senderName";



        if ($mail->send()) {
            $_SESSION['status'] = "Email Sent";
            header("Location: homepage.php");
            exit;
        } else {
            $_SESSION['status'] = "Message could not be sent, Error: " . $mail->ErrorInfo;
            header("Location: homepage.php");
            exit;
        }
    } catch (Exception $e) {

        echo "Message could not be sent, Error: " . $mail->ErrorInfo;
        header("Location: homepage.php");
        exit;
    }
}
