<?php

include __DIR__ . '/../includes/db_connect.php';
mysqli_report(MYSQLI_REPORT_STRICT || MYSQLI_REPORT_ERROR);

class logs
{
    private mysqli $conn;

    public function __construct(mysqli $conn)
    {
        $this->conn = $conn;
    }

    public function getLogs(): array
    {

        $stmt = $this->conn->prepare("SELECT * FROM logs");
        $stmt->execute();
        $result = $stmt->get_result();

        $logs = [];

        while ($row = $result->fetch_assoc()) {
            $logs[] = $row;
        }

        return $logs;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $logs = new logs($conn);

    echo json_encode($logs->getLogs());
}



// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     echo json_encode(['message' => 'hello there']);
// }


// if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['post_id'])) {
//     $post_id = (int) $_GET['post_id'];

//     try {
//         $stmt = $conn->prepare("SELECT commentID, postID, userID, comment, commentDate FROM comments WHERE postID = ? ORDER BY commentDate ASC");
//         $stmt->bind_param("i", $post_id);
//         $stmt->execute();
//         $res = $stmt->get_result();

//         $comments = []; // Initialize an array to hold comments

//         while ($row = $res->fetch_assoc()) { // Fetch each comment as an associative array
//             $comments[] = $row;
//         }

//         header('Content-Type: application/json'); // Set header for JSON response
//         echo json_encode($comments); // Encode the comments array as JSON and output it
//         exit;
//     } catch (Exception $e) {
//         header('Content-Type: application/json', true, 500);
//         echo json_encode(['error' => 'Could not fetch comments']);
//         exit;
//     }
// }