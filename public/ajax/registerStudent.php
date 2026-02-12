<?php
session_start();
include __DIR__ . '/../../includes/db_connect.php';
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    header('Content-Type: application/json');

    $email       = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    $stmt = $conn->prepare("SELECT * FROM student_information WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo json_encode(['success' => false, 'message' => 'Email is Already in use. Please use Another.']);
        $stmt->close();
        exit;
    } else {
        // PERSONAL INFORMATION
        $firstName     = trim($_POST['firstName'] ?? '');
        $lastName      = trim($_POST['lastName'] ?? '');
        $middleName    = trim($_POST['middleName'] ?? '');
        $extensionName = trim($_POST['exName'] ?? '');
        $birthDate     = $_POST['birthDate'] ?? '';
        $age           = (int) ($_POST['age'] ?? 0);
        $nationality   = trim($_POST['nationality'] ?? '');
        $civilStatus   = $_POST['civilStatus'] ?? '';
        $gender        = $_POST['gender'] ?? '';


        // CONTACT INFORMATION
        $email       = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $phoneNumber = preg_replace('/[^0-9]/', '', $_POST['phoneNumber'] ?? '');
        $address     = trim($_POST['address'] ?? '');
        $barangay    = trim($_POST['barangayInput'] ?? '');
        $city        = trim($_POST['city'] ?? '');
        $province    = trim($_POST['province'] ?? '');
        $zipCode     = trim($_POST['zipCode'] ?? '');


        // ACADEMIC INFORMATION
        $program        = $_POST['program'] ?? '';
        $yearLevel      = $_POST['yearLevel'] ?? '';
        $studentType    = $_POST['studentType'] ?? '';
        $enrollmentType = $_POST['enrollmentType'] ?? '';


        // EMERGENCY CONTACT
        $guardianName  = trim($_POST['guardianName'] ?? '');
        $relationship  = $_POST['relationship'] ?? '';
        $guardianPhone = preg_replace('/[^0-9]/', '', $_POST['guardianPhone'] ?? '');
        $guardianEmail = filter_input(INPUT_POST, 'guardianEmail', FILTER_SANITIZE_EMAIL);


        // ACCOUNT INFORMATION
        $accountUsername = trim($_POST['accountUsername'] ?? '');
        $password        = $_POST['password'] ?? '';
        $hashedPassword  = password_hash($password, PASSWORD_BCRYPT);
        $recoveryEmail   = filter_input(INPUT_POST, 'recoveryInput', FILTER_SANITIZE_EMAIL);

        // Start transaction
        $conn->begin_transaction();

        try {
            // First query - Insert student
            $stmt = $conn->prepare("INSERT INTO student_information (
                                            FirstName, LastName, MiddleName, Ext_Name,
                                            BirthDate, Age, Nationality, CivilStatus,
                                            Gender, Email, PhoneNumber, Address, Barangay,
                                            City, Province, ZipCode, Program, YearLevel, 
                                            StudentType, EnrollmentType, GuardianName, Relationship,
                                            GuardianPhone, GuardianEmail
                                            )
                                            VALUES
                                            (?,?,?,?,
                                            ?,?,?,?,
                                            ?,?,?,?,?,
                                            ?,?,?,?,?,
                                            ?,?,?,?,
                                            ?,?
                                            )
                                            ");

            $stmt->bind_param(
                "sssssississsssssssssssss",
                $firstName,
                $lastName,
                $middleName,
                $extensionName,
                $birthDate,
                $age,
                $nationality,
                $civilStatus,
                $gender,
                $email,
                $phoneNumber,
                $address,
                $barangay,
                $city,
                $province,
                $zipCode,
                $program,
                $yearLevel,
                $studentType,
                $enrollmentType,
                $guardianName,
                $relationship,
                $guardianPhone,
                $guardianEmail
            );

            $stmt->execute();
            $student_id = $conn->insert_id;
            $stmt->close();

            // Second query - Insert account
            $stmt = $conn->prepare("INSERT INTO accounts (student_id, account_username, account_password, recovery_email) 
                                VALUES (?,?,?,?)");

            $stmt->bind_param("isss", $student_id, $accountUsername, $hashedPassword, $recoveryEmail);
            $stmt->execute();
            $stmt->close();

            $log_description = 'New Student Registration';
            $log_owner = $firstName . ' ' . $lastName;

            $stmt = $conn->prepare("INSERT INTO logs (student_id, log_description, log_owner) VALUES (?,?,?)");
            $stmt->bind_param("iss", $student_id, $log_description, $log_owner);
            $stmt->execute();
            $stmt->close();

            // Commit all queries
            $conn->commit();

            echo json_encode(['success' => true, 'message' => 'Registration successful']);
        } catch (Exception $e) {
            // Rollback if any query fails
            $conn->rollback();
            echo json_encode(['success' => false, 'message' => 'Registration failed: ']);
        }
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid Request. Please Try again.']);
}
