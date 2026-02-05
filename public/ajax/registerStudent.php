<?php
session_start();
include __DIR__ . '/../../includes/db_connect.php';
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
    $recoveryEmail   = filter_input(INPUT_POST, 'recoveryInput', FILTER_SANITIZE_EMAIL);

    $stmt = $conn->prepare("INSERT INTO students (
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

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Registration Successful!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Registration Failed, Please Try again.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid Request. Please Try again.']);
}
