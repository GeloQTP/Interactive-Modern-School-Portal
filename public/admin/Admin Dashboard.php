<?php
// session_start();

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
    <link rel="stylesheet" href="./styles/style.css">
</head>

<style>

</style>

<body>

    <!-- SPINNER -->
    <div class="spinner-wrapper" aria-hidden="true">
        <div class="spinner-grow text-success" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

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
        <aside id="sidebar" style="position: fixed; height:100vh;">
            <div class="d-flex">
                <button id="toggle-btn">
                    <i class="bi bi-grid"></i>
                </button>

                <!-- <div class="sidebar-logo">
                    <a href="#">ADMIN</a>
                </div> -->
            </div>

            <ul class="sidebar-nav">

                <li class="navbar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-house"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-people"></i>
                        <span>User Management</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-file-earmark-text"></i>
                        <span>Content & Posts</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-book"></i>
                        <span>Academic Data</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-award"></i>
                        <span>Alumni Management</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-envelope"></i>
                        <span>Communications</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-graph-up"></i>
                        <span>Reports and Analytics</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-gear"></i>
                        <span>System Settings</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-shield-check"></i>
                        <span>Security and Audit</span>
                    </a>
                </li>

            </ul>

            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="bi bi-box-arrow-left"></i>
                    <span>Logout</span>
                </a>
            </div>

        </aside>

        <div class="main ms-5 ps-4">
            <nav class="navbar navbar-expand-lg bg-light border border-bottom d-flex pt-4">
                <div class="container-fluid justify-content-center">
                    <p class="text-success lead">Welcome Admin</p>
                </div>
            </nav>

            <div class="p-3">
                <!-- CARDS -->
                <div class="row g-3 mb-4">
                    <!-- TOTAL STUDENTS CARD-->
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="text-muted mb-1">Total Students</p>
                                        <h3 class="mb-0 fw-bold" id="totalStudents">0</h3>
                                        <small class="text-success">+12% from last month</small>
                                    </div>
                                    <div class="stat-icon text-info">
                                        <i class="bi bi-people h2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TOTAL ALUMNI CARD-->
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="text-muted mb-1">Total Alumni</p>
                                        <h3 class="mb-0 fw-bold">0</h3>
                                        <small class="text-success">+12% from last month</small>
                                    </div>
                                    <div class="stat-icon bg-opacity-10 text-primary">
                                        <i class="bi bi-mortarboard h2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TOTAL TEACHERS CARD-->
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="text-muted mb-1">Total Teachers</p>
                                        <h3 class="mb-0 fw-bold">0</h3>
                                        <small class="text-success">+12% from last month</small>
                                    </div>
                                    <div class="stat-icon text-success">
                                        <i class="bi bi-eyeglasses h1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TOTAL POSTS -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="text-muted mb-1">Total Posts</p>
                                        <h3 class="mb-0 fw-bold">67</h3>
                                        <small class="text-success">+12% from last month</small>
                                    </div>
                                    <div class="stat-icon text-danger">
                                        <i class="bi bi-megaphone h3"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- PENDING APPROVALS -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="text-muted mb-1">Pending Approvals</p>
                                        <h3 class="mb-0 fw-bold" id="pendingRegistrations">0</h3>
                                        <small class="text-success">+12% from last month</small>
                                    </div>
                                    <div class="stat-icon bg-opacity-10 text-warning">
                                        <i class="bi bi-hourglass h3"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- NEWS LETTER SUBSCRIBERS -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="text-muted mb-1">Newsletter Subscribers</p>
                                        <h3 class="mb-0 fw-bold" id="newsLetterSubscribers">0</h3>
                                        <small class="text-success">+12% from last month</small>
                                    </div>
                                    <div class="stat-icon bg-opacity-10 text-primary">
                                        <i class="bi bi-graph-up h3"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- LOGS -->
                <div class="row g-3">

                    <div class="col-lg-8">
                        <div class="card" style="height: 38.5vh;">

                            <div class="d-flex align-items-center justify-content-between border-bottom">
                                <p class="text-muted fw-bold" style="transform: translate(19px,8.5px);">Recent Activities</p>
                                <p class="text-muted small" style="transform: translate(-20px,9px);">Showing Page 1/100</p>
                                <i class="bi bi-activity h3 text-danger pe-3" style="transform: translate(0px, 5px);"></i>
                                <!-- <div class=" pe-3">
                                    <span class="badge text-bg-info">registered</span>
                                    <span class="badge text-bg-secondary">login</span>
                                    <span class="badge text-bg-secondary">logout</span>
                                    <span class="badge text-bg-warning text-light">pending</span>
                                    <span class="badge text-bg-success">approved</span>
                                    <span class="badge text-bg-danger">rejected</span>

                            </div> -->
                            </div>

                            <div class="card-body overflow-y-scroll">
                                <!-- LOG -->
                                <?php

                                while ($row = $result->fetch_assoc()) {

                                    $statusColor = 'info';
                                    if ($row['status'] === 'pending') {
                                        $statusColor = 'warning';
                                    } else if ($row['status'] === 'rejected') {
                                        $statusColor = 'danger';
                                    } else if ($row['status'] === 'approved') {
                                        $statusColor = 'success';
                                    }

                                ?>


                                    <div class="activity-item mb-3 pb-3 border-start border-3">
                                        <div class="d-flex justify-content-between align-items-start ps-3">
                                            <div>
                                                <p class="mb-1 fw-semibold"><?= $row['student_id'] ?></p>
                                                <p class="mb-1 text-muted small"><?= $row['log_description'] ?></p>
                                                <small class="text-muted">5 mins ago</small>
                                            </div>
                                            <span class="badge text-bg-<?php echo $statusColor ?> text-light"><?= $row['status'] ?></span>
                                        </div>
                                    </div>


                                <?php } ?>
                                <!-- LOG -->
                            </div>

                            <div class="ms-auto pe-3" style="transform: translate(0px, 10px)">
                                <ul class="pagination pagination-sm">

                                    <?php
                                    if (isset($_GET['page-nr']) && $_GET['page-nr'] > 1) {
                                    ?>
                                        <li class="page-item"><a class="page-link" href="?page-nr=<?= $_GET['page-nr'] - 1 ?>">Previous</a></li>
                                    <?php
                                    } else {
                                    ?>
                                        <li class="page-item"><a class="page-link" href="">Previous</a></li>
                                    <?php
                                    }
                                    ?>

                                    <?php

                                    if (!isset($_GET['page-nr'])) { ?>

                                        <li class="page-item"><a class="page-link" href="?page-nr=2">Next</a></li>

                                    <?php } else { ?>

                                        <?php if ($_GET['page-nr'] >= $pages) { ?>

                                            <li class="page-item"><a class="page-link" href="">Next</a></li>

                                        <?php
                                        } else { ?>
                                            <li class="page-item"><a class="page-link" href="?page-nr<?= $_GET['page-nr'] + 1 ?>">Next</a></li>
                                    <?php
                                     }
                                    } ?>
                                </ul>
                            </div>



                        </div>
                    </div>

                    <!-- MESSAGE LOGS -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="d-flex border-bottom align-items-center justify-content-between
                            ">
                                <p class="text-muted fw-bold" style="transform: translate(19px,8.5px);">Messages</p>

                                <div class="pe-2">
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="right"
                                        data-bs-custom-class="custom-tooltip-archive"
                                        data-bs-title="Check Archive">
                                        <i class="bi bi-archive"></i>
                                    </button>
                                </div>

                            </div>
                            <div class="card-body">
                                <!-- MESSAGE -->
                                <div class="activity-item mb-3">
                                    <div class="d-flex justify-content-between align-items-start ps-3 border-start border-3">
                                        <div>
                                            <p class="mb-1 fw-semibold">Juliana Cruz</p>

                                            <div class="mb-2">
                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="left"
                                                    data-bs-custom-class="custom-tooltip-view"
                                                    data-bs-title="View Message">
                                                    <i class="bi bi-eye text-light"></i>
                                                </button>

                                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    data-bs-custom-class="custom-tooltip-mark"
                                                    data-bs-title="Mark as Read">
                                                    <i class="bi bi-check-lg"></i>
                                                </button>

                                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="right"
                                                    data-bs-custom-class="custom-tooltip-archive"
                                                    data-bs-title="Archive Message">
                                                    <i class="bi bi-archive"></i>
                                                </button>
                                            </div>

                                            <small class="text-muted">5 mins ago</small>
                                        </div>
                                        <span class="badge text-bg-warning text-light">Unread</span>
                                    </div>
                                </div>
                                <!-- MESSAGE -->
                            </div>
                        </div>
                    </div>
                    <!-- MESSAGE LOGS -->

                </div>

            </div>
        </div>

    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

    const hamburger = document.querySelector("#toggle-btn");

    hamburger.addEventListener("click", function() {
        document.querySelector("#sidebar").classList.toggle("expand");
    });

    // LOADER ANIMATION
    const spinner = document.querySelector(".spinner-wrapper");

    window.addEventListener("load", () => {
        setTimeout(() => (spinner.style.display = "none"), 1000);
    });
</script>

<script>
    loadDashboardStats(); // initial load
    setInterval(loadDashboardStats, 5000); // refresh every 5s

    async function loadDashboardStats() {

        try {
            const res = await fetch('../../classes/dashboardStats.php', {
                method: 'POST'
            });

            if (!res.ok) throw new Error('Network Response was not ok.');

            const data = await res.json();

            document.getElementById("totalStudents").textContent = data.totalStudents;
            document.getElementById("pendingRegistrations").textContent = data.totalPendingRegistrations;
            document.getElementById("newsLetterSubscribers").textContent = data.totalNewsSubscribers;

        } catch (error) {
            document.getElementById("totalStudents").textContent = 0;
            document.getElementById("pendingRegistrations").textContent = 0;
        }
    }
</script>

</html>