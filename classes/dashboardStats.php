<?php

include __DIR__ . '/../includes/db_connect.php';
mysqli_report(MYSQLI_REPORT_STRICT || MYSQLI_REPORT_ERROR);
class DashboardStats
{
    private mysqli $conn;

    public function __construct(mysqli $conn)
    {
        $this->conn = $conn;
    }

    public function countStudentsByState(string $state): int
    {
        $stmt = $this->conn->prepare(
            "SELECT COUNT(*) FROM student_information WHERE state = ?"
        );
        $stmt->bind_param("s", $state);
        $stmt->execute();
        $stmt->bind_result($total);
        $stmt->fetch();
        $stmt->close();

        return $total;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dashboardStats = new dashboardStats($conn);

    header('Content-Type: application/json');
    echo json_encode([
        'totalStudents' => $dashboardStats->countStudentsByState('enrolled'),
        'totalPendingRegistrations' => $dashboardStats->countStudentsByState('registered'),
    ]);
}





// class DashboardStats
// {
//     private mysqli $conn; // private property (variable) only accesible to this class

//     public function __construct(mysqli $conn) // will be automatically called when we create/call an object
//     {
//         $this->conn = $conn; // this->conn refers to the private property above
//     }

//     public function totalUsers(): int // : int indicates that this function will return an integer value
//     {
//         $stmt = $this->conn->prepare("SELECT COUNT(*) AS total FROM users");
//         $stmt->execute();
//         $result = $stmt->get_result()->fetch_assoc();
//         return $result['total'];
//     }
//     public function totalAdmins(): int
//     {
//         $stmt = $this->conn->prepare("SELECT COUNT(*) AS total FROM users WHERE userType='admin'");
//         $stmt->execute();
//         $result = $stmt->get_result()->fetch_assoc();
//         return $result['total'];
//     }
//     public function newUsersToday(): int
//     {
//         $stmt = $this->conn->prepare("SELECT COUNT(*) AS total FROM users WHERE DATE(reg_date) = CURDATE()");
//         $stmt->execute();
//         $result = $stmt->get_result()->fetch_assoc();
//         return $result['total'];
//     }
//     public function newUsersThisMonth(): int
//     {
//         $stmt = $this->conn->prepare("SELECT COUNT(*) AS total FROM users WHERE MONTH(reg_date) = MONTH(CURDATE()) AND YEAR(reg_date) = YEAR(CURDATE())");
//         $stmt->execute();
//         $result = $stmt->get_result()->fetch_assoc();
//         return $result['total'];
//     }
