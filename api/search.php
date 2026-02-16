<?php
session_start();
include __DIR__ . '/../includes/db_connect.php';
mysqli_report(MYSQLI_REPORT_STRICT || MYSQLI_REPORT_ERROR);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $queue = trim((string)($_POST['searchQueue'] ?? ''));
    $filterByCourse = (string)($_POST['filterbyProgram'] ?? '');
    $current_status = (string)($_POST['current_status'] ?? '');
    $queue = $queue . '%';

    if (empty($filterByCourse) || $filterByCourse === "undefined" || $filterByCourse === "show_all") { // NO SELECTION FILTER
        $stmt = $conn->prepare("SELECT * FROM student_information WHERE current_status = ? AND LastName LIKE ?");
        $stmt->bind_param("ss", $current_status, $queue);
    } else if ($queue && $filterByCourse) {
        $stmt = $conn->prepare("SELECT * FROM student_information WHERE current_status = ? AND Program = ? AND FirstName LIKE ?");
        $stmt->bind_param("sss", $current_status, $filterByCourse, $queue);
    }

    $stmt->execute();
    $result = $stmt->get_result();

    $list = [];

    while ($row = $result->fetch_assoc()) {
        $list[] = $row;
    }

    echo json_encode($list);
}
