<?php
session_start();
include __DIR__ . '/../includes/db_connect.php';
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    header('Content-Type: application/json');

    $post_id = $_POST['post_id'] ?? '';

    $action = $_POST['action'] ?? '';

    switch ($action) {

        case 'load':
            $stmt = $conn->prepare("SELECT * FROM posts");
            $stmt->execute();
            $result = $stmt->get_result();

            $posts = [];

            while ($row = $result->fetch_assoc()) {
                $posts[] = $row;
            }

            echo json_encode($posts);
            break;


        case 'view':
            echo json_encode([$post_id]);
            //TODO: GET REQUEST FOR VIEWING POST
            break;
    }
}
