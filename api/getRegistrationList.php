<?php
session_start();
include __DIR__ . '/../includes/db_connect.php';
mysqli_report(MYSQLI_REPORT_STRICT || MYSQLI_REPORT_ERROR);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $filterBy = (string)($_POST['filterBy'] ?? '');

    if (
        empty($filterBy) || $filterBy === "undefined" || $filterBy === "show_all" // NO FILTER - SELECT ALL
    ) {
        $current_status = 'pending';
        $stmt = $conn->prepare("SELECT * FROM student_information WHERE current_status = ?");
        $stmt->bind_param("s", $current_status);
        $stmt->execute();
        $result = $stmt->get_result();

        $list = [];

        while ($row = $result->fetch_assoc()) {
            $list[] = $row;
        }

        echo json_encode($list);
    } else if ($filterBy) { // FILTER ENABLED
        $current_status = 'pending';
        $stmt = $conn->prepare("SELECT * FROM student_information WHERE current_status = ? AND Program = ?");
        $stmt->bind_param("ss", $current_status, $filterBy);
        $stmt->execute();
        $result = $stmt->get_result();

        $list = [];

        while ($row = $result->fetch_assoc()) {
            $list[] = $row;
        }

        echo json_encode($list);
    }
}
