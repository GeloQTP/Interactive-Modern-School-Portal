<?php
session_start();
include __DIR__ . '/../includes/db_connect.php';
mysqli_report(MYSQLI_REPORT_STRICT || MYSQLI_REPORT_ERROR);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $current_status = 'pending';
    $stmt = $conn->prepare("SELECT * FROM user_information WHERE current_status = ?");
    $stmt->bind_param("s", $current_status);
    $stmt->execute();
    $result = $stmt->get_result();

    $list = [];

    while ($row = $result->fetch_assoc()) {
        $list[] = $row;
    }

    echo json_encode($list);
}
