<?php
// if(!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin'){
//     header('Location: ./public/visitors/Landing%20Page.php');
//     exit();
// }
include __DIR__ . '/../../classes/recentActivities.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Tomas Del Rosario College</title>
    <link rel="icon" type="image/png" href="/Modern Student Portal/src/img/TRC_LOGO.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./modules/sidebar.css">
</head>

<style>

</style>

<body>

    <!-- TOASTS SECTION -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast bg-light text-dark" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="/Modern Student Portal/src/img/TRC_LOGO.png" style="width: 30px;" class="rounded me-2 img-fluid"
                    alt="...">
                <strong class="me-auto">TRC Notification</strong>
                <small>just now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">

            </div>
        </div>
    </div>

    <div class="wrapper">

        <?php
        include __DIR__ . '/modules/sidebar.php'; // SIDE BAR
        ?>

        <div class="main ms-5 ps-4">
            <nav class="navbar navbar-expand-lg bg-light border border-bottom">
                <div class="container-fluid justify-content-center" style="transform: translate(0px, 10px);">
                    <p class="text-success lead">Dashboard</p>
                </div>
            </nav>

            <div class="p-3">
                <?php
                include __DIR__ . '/modules/statisticsCards.php'; // CARDS
                ?>
                <div class="row g-3">

                    <?php
                    include __DIR__ . '/modules/LogsCard.php'; // LOGS
                    ?>

                    <?php
                    include __DIR__ . '/modules/MessagesCard.php'; // MESSAGES
                    ?>

                </div>

            </div>
        </div>

    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="./scripts/DashboardScript.js"></script>
<script src="./scripts/loadDashboardStats.js"></script>
<script src="./scripts/sidebar.js"></script>

</html>