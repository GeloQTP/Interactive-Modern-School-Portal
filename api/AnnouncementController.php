<?php
session_start();
include __DIR__ . '/../includes/db_connect.php';
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $action = $_POST['action'];
    $filter = $_POST['filter'];
    $date_today = date("Y-m-d");

    if ($action === 'load') {

        if ($filter !== 'undefined') {
            $stmt = $conn->prepare("SELECT * FROM broadcasts WHERE expires_at > ? AND status = ?");
            $stmt->bind_param("ss", $date_today, $filter);
        } else {
            $stmt = $conn->prepare("SELECT * FROM broadcasts WHERE expires_at > ?");
            $stmt->bind_param("s", $date_today);
        }

        $stmt->execute();
        $result = $stmt->get_result();

        $announcements = [];

        while ($row = $result->fetch_assoc()) {
            $announcements[] = $row;
        }

        echo json_encode($announcements);
        exit;
    }

    if ($action === 'edit') {
    }

    if ($action === 'archive') {
    }

    if ($action === 'delete') {
    }

    if ($action === 'search') {
    }
}
