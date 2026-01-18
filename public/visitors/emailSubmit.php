<?php
include(__DIR__ . '/../../includes/db_connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $stmt = $conn->prepare("SELECT email from newsletter_subscribers WHERE email =?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo json_encode(['success' => false, 'message' => 'This Email is already Subscribed!']);
        } else {
            $stmt = $conn->prepare("INSERT INTO newsletter_subscribers (email) VALUES (?)");
            $stmt->bind_param("s", $email);

            if ($stmt->execute()) {
                echo json_encode(['success' => true, 'message' => 'Subscribed successfully']);
            } else {
                $_SESSION['status'] = 'Subscription failed. Please try again.';
                echo json_encode(['success' => false, 'message' => 'Database error']);
            }

            $stmt->close();
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid email']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
