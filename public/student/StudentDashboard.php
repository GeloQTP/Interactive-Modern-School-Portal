<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'Student') {
    header('Location: ./public/visitors/LoginPage.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dashboard - Tomas Del Rosario College</title>
    <link rel="icon" type="image/png" href="/Modern Student Portal/src/img/TRC_LOGO.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="row p-md-4 p-1">
        <div class="col-md-2">
            <div class="card mb-3">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <p>BSCS</p>
                    <p>4th Year</p>
                </div>
            </div>

            <div class="card" style="height: 70vh;">
                <div class="card-header">
                    <small>MENU</small>
                </div>
                <div class="card-body">
                    <p>BSCS</p>
                    <p>4th Year</p>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="card" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title">Good Morning, <?= $_SESSION['account_username'] ?>!</h5>
                    <p class="card-text">You have 2 pending tasks and 1 upcoming exam this week.</p>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <iframe src="https://calendar.google.com/calendar/embed?height=300&wkst=1&ctz=Asia%2FManila&showPrint=0&src=ZGZzcXVpZGFydEBnbWFpbC5jb20&src=ZW4ucGhpbGlwcGluZXMjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039be5&color=%230b8043&hl=en" style="border-radius: 10px" width="430" height="400" frameborder="0" scrolling="no"></iframe>
        </div>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</html>