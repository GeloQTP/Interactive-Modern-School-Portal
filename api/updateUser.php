<?php
session_start();
header('Content-Type: application/json');
include __DIR__ . '/../includes/db_connect.php';
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // USER INDEX
    $student_id        = (int)($_POST['student_id'] ?? 0);

    // USER INFORMATION
    $current_status    = (string)($_POST['current_status'] ?? '');
    $firstName         = (string)($_POST['FirstName'] ?? '');
    $middleName        = (string)($_POST['MiddleName'] ?? '');
    $lastName          = (string)($_POST['LastName'] ?? '');
    $extName           = (string)($_POST['Ext_Name'] ?? '');

    $birthDate         = (string)($_POST['BirthDate'] ?? '');
    $age               = (int)($_POST['Age'] ?? 0);
    $nationality       = (string)($_POST['Nationality'] ?? '');
    $civilStatus       = (string)($_POST['CivilStatus'] ?? '');
    $gender            = (string)($_POST['Gender'] ?? '');
    $phoneNumber       = (string)($_POST['PhoneNumber'] ?? '');

    $barangay          = (string)($_POST['Barangay'] ?? '');
    $city              = (string)($_POST['City'] ?? '');
    $province          = (string)($_POST['Province'] ?? '');
    $zipCode           = (int)($_POST['ZipCode'] ?? 0);

    $email             = (string)($_POST['Email'] ?? '');
    $user_role         = (string)($_POST['role'] ?? '');

    $program           = (string)($_POST['Program'] ?? '');
    $yearLevel         = (string)($_POST['YearLevel'] ?? '');
    $studentType       = (string)($_POST['StudentType'] ?? '');
    $enrollmentType    = (string)($_POST['EnrollmentType'] ?? '');
    $graduationYear    = (int)($_POST['GraduationYear'] ?? 0);
    $honors            = (string)($_POST['Honors'] ?? '');

    $employmentStatus  = (string)($_POST['EmploymentStatus'] ?? '');
    $companyName       = (string)($_POST['CompanyName'] ?? '');
    $jobTitle          = (string)($_POST['JobTitle'] ?? '');
    $workLocation      = (string)($_POST['WorkLocation'] ?? '');

    $guardianName      = (string)($_POST['GuardianName'] ?? '');
    $relationship      = (string)($_POST['Relationship'] ?? '');
    $guardianPhone     = (string)($_POST['GuardianPhone'] ?? '');
    $guardianEmail     = (string)($_POST['GuardianEmail'] ?? '');

    // USER ACCOUNT TABLE
    $accountEmail      = (string)($_POST['account_email'] ?? '');
    $accountUsername   = (string)($_POST['account_username'] ?? '');
    $recoveryEmail     = (string)($_POST['recovery_email'] ?? '');
    $account_role      = (string)($_POST['account_role'] ?? '');
    $activationStatus  = (string)($_POST['activationStatus'] ?? 'disabled');

    $conn->begin_transaction();

    try {

        // USER_INFORMATION QUERY
        $stmt = $conn->prepare("UPDATE user_information SET
                                    current_status = ?,
                                    FirstName = ?, 
                                    MiddleName = ?, 
                                    LastName = ?, 
                                    Ext_Name = ?,
                                    BirthDate = ?, 
                                    Age = ?, 
                                    Nationality = ?, 
                                    CivilStatus = ?, 
                                    Gender = ?, 
                                    PhoneNumber = ?, 
                                    Barangay = ?, 
                                    City = ?, 
                                    Province = ?, 
                                    ZipCode = ?, 
                                    Email = ?, 
                                    role = ?,
                                    Program = ?,
                                    YearLevel = ?, 
                                    StudentType = ?, 
                                    EnrollmentType = ?, 
                                    GraduationYear = ?, 
                                    Honors = ?, 
                                    EmploymentStatus = ?, 
                                    CompanyName = ?, 
                                    JobTitle = ?, 
                                    WorkLocation = ?,
                                    GuardianName = ?, 
                                    Relationship = ?, 
                                    GuardianPhone = ?, 
                                    GuardianEmail = ?
                                    WHERE student_id = ?
    ");

        $stmt->bind_param(
            "ssssssissssssssssssssssssssssssi",

            $current_status,
            $firstName,
            $middleName,
            $lastName,
            $extName,
            $birthDate,
            $age,
            $nationality,
            $civilStatus,
            $gender,
            $phoneNumber,
            $barangay,
            $city,
            $province,
            $zipCode,
            $email,
            $user_role,
            $program,
            $yearLevel,
            $studentType,
            $enrollmentType,
            $graduationYear,
            $honors,
            $employmentStatus,
            $companyName,
            $jobTitle,
            $workLocation,
            $guardianName,
            $relationship,
            $guardianPhone,
            $guardianEmail,
            $student_id
        );
        $stmt->execute();
        $stmt->close();

        $stmt = $conn->prepare("UPDATE users SET account_email = ?, 
                                    account_username = ?, 
                                    recovery_email = ?, 
                                    account_role = ? ,
                                    activationStatus = ?
                                    WHERE student_id = ?
                                    ");
        $stmt->bind_param("ssssss", $accountEmail, $accountUsername, $recoveryEmail, $account_role, $activationStatus, $student_id);
        $stmt->execute();
        $stmt->close();

        $conn->commit();
        echo json_encode(['success' => true]);
    } catch (Exception $e) {
        $conn->rollback();
        echo json_encode(['success' => false, 'error' => $e]);
    }
}
