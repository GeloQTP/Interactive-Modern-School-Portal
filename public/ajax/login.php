<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $passcode = $_POST['password'] ?? '';

    $stmt = $conn->prepare("SELECT student_information.Email, student_accounts.account_password, student_information.RegistrationDate FROM student_information INNER JOIN student_accounts ON student_information.student_id = student_accounts.student_id WHERE student_information.student_id = student_accounts.student_id AND student_information.status = 'enrolled' AND student_information.Email = ? ORDER BY student_information.RegistrationDate;");

    $stmt->bind_param("s", $email);
    $stmt->execute();
}
