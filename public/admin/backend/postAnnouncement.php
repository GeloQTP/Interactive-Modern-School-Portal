<?php
include __DIR__ . '/../../../includes/db_connect.php';
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $action = $_POST['action'];

    if ($action === 'broadcast') {
        $broadcastTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        $broadcastTitle = $broadcastTitle !== '' ? $broadcastTitle : 'N/A';

        $announcement_message = trim(filter_input(INPUT_POST, 'announcement_message', FILTER_SANITIZE_SPECIAL_CHARS));
        $announcement_message = $announcement_message !== '' ? $announcement_message : 'N/A';

        $theme_color = (string)($_POST['theme_color'] ?? '');
        $expires_at = $_POST['expires_at'];
        $status = (string)($_POST['status'] ?? '');
        $createdBy = 'Admin';
        $createdAt = date("Y-m-d");

        $stmt = $conn->prepare("INSERT INTO broadcasts (title, announcement_message, theme_color, status, expires_at, created_by, created_at)
                                VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss", $broadcastTitle, $announcement_message, $theme_color, $status, $expires_at, $createdBy, $createdAt);

        if ($stmt->execute()) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false]);
        }

        exit;
    }

    if ($action === 'post') {
        echo json_encode(['message', 'you posted something stupid, lmao']);
    }
}
