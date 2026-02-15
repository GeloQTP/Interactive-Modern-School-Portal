<?php
session_start();
include __DIR__ . '/../includes/db_connect.php';
mysqli_report(MYSQLI_REPORT_STRICT || MYSQLI_REPORT_ERROR);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    header('Content-Type: application/json');

    $action = $_POST['action'];
    $student_id = (int)$_POST['student_id'];

    switch ($action) {

        case 'verify':
            echo json_encode(['message' => 'this is the verify case']);
            break;

        case 'view':

            $stmt = $conn->prepare("SELECT * FROM student_information WHERE student_id = ?");
            $stmt->bind_param("i", $student_id);
            $stmt->execute();
            $result = $stmt->get_result();

            $student = $result->fetch_assoc(); // only one student

            echo json_encode($student); // directly the object
            break;

        case 'reject':
            echo json_encode(['message' => 'this is the reject case']);
            break;
    }
}
