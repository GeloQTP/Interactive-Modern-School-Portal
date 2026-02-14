<?php
session_start();
include __DIR__ . '/../includes/db_connect.php';
mysqli_report(MYSQLI_REPORT_STRICT || MYSQLI_REPORT_ERROR);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    header('Content-Type: application/json');

    $action = $_POST['action'];

    switch ($action) {

        case 'verify':
            echo json_encode(['message' => 'this is the verify case']);
            break;

        case 'view':
            echo json_encode(['message' => 'this is the view case']);
            break;

        case 'reject':
            echo json_encode(['message' => 'this is the reject case']);
            break;
    }
}
