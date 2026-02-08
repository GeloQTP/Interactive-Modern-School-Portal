<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $passcode = $_POST['password'] ?? '';

    $stmt = $conn->prepare("SELECT student_information.Email, accounts.account_username, accounts.account_password, accounts.role FROM accounts INNER JOIN student_information ON accounts.student_id = student_information.student_id WHERE student_information.Email = 'geloadrian24@gmail.com';");

    $stmt->bind_param("s", $email);
    $stmt->execute();
}
