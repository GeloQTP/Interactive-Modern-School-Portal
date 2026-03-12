<?php
include __DIR__ . '/../../includes/db_connect.php';
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ALL);
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
    <link rel="stylesheet" href="./components/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light border border-bottom">
        <img src="/Modern Student Portal/src/img/TRC_LOGO.png" alt="TRC_LOGO" style="width: 50px;" class="ms-3">
        <div class="input-group mx-auto" style="width: 40%;">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
            <input type="text" class="form-control form-control-sm" placeholder="Search Classmates" aria-label="Search People" aria-describedby="basic-addon1">
        </div>
        <div class="me-3">
            <i class="bi bi-bell h4 text-success"></i>
        </div>
    </nav>

    <div class="main p-md-2 p-1">
        <div class="row g-3">

            <div class="col-md-2">
                <?php
                include __DIR__ . '/components/studentSideBar.php'; // STUDENT SIDEBAR
                ?>
            </div>

            <div class="col-md-7">
                <?php
                include __DIR__ . '/components/announcementCarousel.php'; // ANNOUNCEMENT CAROUSEL
                ?>

                <?php
                include __DIR__ . '/components/postsView.php'; // POSTS VIEW 
                ?>

            </div>

            <div class="col-md-1 text-center">
                <?php
                include __DIR__ . '/components/evenCalendar.php'; // EVENT CALENDAR
                ?>
            </div>

        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</html>