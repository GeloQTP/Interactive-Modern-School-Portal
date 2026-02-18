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

    public function countStudentRegistrationByState(string $state): int
    {
        $stmt = $this->conn->prepare(
            "SELECT COUNT(*) FROM user_information WHERE current_status = ?"
        );
        $stmt->bind_param("s", $state);
        $stmt->execute();
        $stmt->bind_result($total);
        $stmt->fetch();
        $stmt->close();

        return $total;
    }

    public function getTotalNewsSubscribers(): int
    {

        $stmt = $this->conn->prepare("SELECT COUNT(*) AS totalNewsSubscribers FROM newsletter_subscribers");
        $stmt->execute();
        $stmt->bind_result($totalNewsSubscribers);
        $stmt->fetch();
        $stmt->close();

        return $totalNewsSubscribers;
    }

    public function getRegistrationsOf(string $role, string $current_status): int
    {
        $stmt = $this->conn->prepare("SELECT COUNT(*) AS totalNewsSubscribers FROM user_information WHERE role = ? AND current_status = ?");
        $stmt->bind_param("ss", $role, $current_status);
        $stmt->execute();
        $stmt->bind_result($totalStudentRegistrations);
        $stmt->fetch();
        $stmt->close();

        return $totalStudentRegistrations;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dashboardStats = new DashboardStats($conn);

    header('Content-Type: application/json');
    echo json_encode([
        'totalStudents' => $dashboardStats->countStudentRegistrationByState('enrolled'), 
        'totalPendingRegistrations' => $dashboardStats->countStudentRegistrationByState('pending'), 
        'totalStudentRegistrations' => $dashboardStats->getRegistrationsOf('Student','pending'),
        'totalAlumniRegistrations' => $dashboardStats->getRegistrationsOf('Alumni','pending'),
        'totalNewsSubscribers' => $dashboardStats->getTotalNewsSubscribers()
    ]);
}
