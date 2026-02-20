<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $passcode = $_POST['password'] ?? '';

    $stmt = $conn->prepare("SELECT user_information.Email, users.account_username, users.account_password, users.role FROM users INNER JOIN user_information ON users.student_id = user_information.student_id WHERE user_information.Email = 'geloadrian24@gmail.com';");

    $stmt->bind_param("s", $email);
    $stmt->execute();
}
