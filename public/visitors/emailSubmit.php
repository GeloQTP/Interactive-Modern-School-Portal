<?php
session_start();
include(__DIR__ . '/../../includes/db_connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Insert email into database
        $stmt = $conn->prepare("INSERT INTO newsletter_subscribers (email) VALUES (?)");
        $stmt->bind_param("s", $email);

        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Subscribed successfully']);
        } else {
            $_SESSION['status'] = 'Subscription failed. Please try again.';
            echo json_encode(['success' => false, 'message' => 'Database error']);
        }

        $stmt->close();
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid email']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
