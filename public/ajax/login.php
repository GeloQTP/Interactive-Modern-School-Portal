<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $passcode = $_POST['password'] ?? '';
}
