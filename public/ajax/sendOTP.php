<?php

session_start();
include __DIR__ . '/../../includes/db_connect.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phoneNumber'] ?? '');
    $otp = random_int(100000, 999999); // 6-digit OTP
    $_SESSION['OTP'] = $otp;
    $_SESSION['otp_timestamp'] = time(); // For 10-minute expiration

    $stmt = $conn->prepare("INSERT INTO pending_registrations (email, phone, otp_hash, otp_expires_at) VALUES (?,?,?,?)");

    $mail = new PHPMailer(true);

    try {

        // Server Settings
        $mail->isSMTP();
        $mail->Host = $_ENV["SMTP_HOST"];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV["SMTP_USER"];
        $mail->Password = $_ENV["SMTP_PASS"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = $_ENV["SMTP_PORT"];

        // Recipients
        $mail->setFrom($_ENV["SMTP_USER"], "Laragon College University");
        $mail->addAddress($email);

        // Mail
        $mail->isHTML(true);

        $mail->Subject = "Your One-Time Password (OTP) from Laragon College University";

        $mail->Body =
            "
                    <div style='font-family: Arial, sans-serif; color: #333; line-height: 1.6; max-width: 600px; margin: auto;'>
                        <h2 style='color: #2c3e50;'>Laragon Registration Verification</h2>

                        <p>Dear Student / Parent,</p>

                        <p>
                            Thank you for starting the registration process.  
                            To continue, please use the One-Time Password (OTP) below to verify your email address.
                        </p>

                        <div style='text-align: center; margin: 30px 0;'>
                            <span style='display: inline-block; font-size: 28px; letter-spacing: 5px; font-weight: bold; color: #2c3e50;'>
                                {$otp}
                            </span>
                        </div>

                        <p>
                            This OTP is valid for <strong>10 minutes</strong>.  
                            Please do not share this code with anyone.
                        </p>

                        <p>
                            If you did not request this registration, you may safely ignore this email.
                        </p>

                        <hr style='margin: 30px 0;'>

                        <p style='font-size: 12px; color: #777;'>
                            This is an automated message from the school registration system.  
                            Please do not reply to this email.
                        </p>

                        <p style='font-size: 12px; color: #777;'>
                            © " . date('Y') . " Laragon College University. All rights reserved.
                        </p>
                    </div>
            ";

        $mail->AltBody =
            "
                        School Registration Verification

                        Thank you for starting the registration process.

                        Your One-Time Password (OTP) is:
                        $otp

                        This OTP is valid for 10 minutes.
                        Do not share this code with anyone.

                        If you did not request this registration, please ignore this email.

                        — Laragon College University
            ";

        // Just call send() - no need for if statement
        $mail->send();

        echo json_encode([
            'success' => true,
            'message' => "We have sent an OTP (One Time Password) to your email: {$email}"
        ]);
    } catch (Exception $e) {
        // Log the actual error for debugging
        error_log("PHPMailer Error: " . $mail->ErrorInfo);

        echo json_encode([
            'success' => false,
            'message' => 'Something went wrong. Please try again.',
            'error' => $mail->ErrorInfo // Remove this in production
        ]);
    }
    exit;
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}
