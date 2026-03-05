<?php
session_start();
include __DIR__ . '/../includes/db_connect.php';
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    header('Content-Type: application/json');

    $post_id = $_POST['post_id'] ?? '';
    $edit_post_title = $_POST['edit_post_title'] ?? '';
    $edit_post_caption = $_POST['edit_post_caption'] ?? '';
    $edit_current_status = $_POST['edit_current_status'] ?? '';
    $new_status = $_POST['new_status'] ?? '';

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
            $stmt = $conn->prepare("SELECT * FROM posts WHERE post_id = ?");
            $stmt->bind_param("s", $post_id);

            if ($stmt->execute()) {
                $result = $stmt->get_result();
                $post_info = $result->fetch_assoc();

                echo json_encode($post_info);
            }

            break;


        case 'update':
            $stmt =  $conn->prepare("UPDATE posts SET post_title = ?, post_caption = ?, status = ? WHERE post_id = ?");
            $stmt->bind_param("sssi", $edit_post_title, $edit_post_caption, $edit_current_status, $post_id);

            if ($stmt->execute()) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false]);
            }

            break;

        case 'archive':

            $stmt = $conn->prepare("UPDATE posts SET status = ? WHERE post_id = ?");
            $stmt->bind_param("ss", $new_status, $post_id);

            if ($stmt->execute()) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false]);
            }

            break;


        case 'delete': // TODO: DELETE THE IMAGE FROM THE UPLOAD FOLDERS TOO
            $stmt = $conn->prepare("DELETE FROM posts WHERE post_id = ?");
            $stmt->bind_param("s", $post_id);

            if ($stmt->execute()) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false]);
            }
            break;
    }
}
