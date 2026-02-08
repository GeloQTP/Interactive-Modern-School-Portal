<?php
// session_start();

// if(!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin'){
//     header('Location: ./public/visitors/Landing%20Page.php');
//     exit();
// }

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

    <div class="wrapper">
        <aside id="sidebar" style="position: fixed; height:100%;">
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
                                        <h3 class="mb-0 fw-bold">0</h3>
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
                                        <h3 class="mb-0 fw-bold">0</h3>
                                        <small class="text-success">+12% from last month</small>
                                    </div>
                                    <div class="stat-icon bg-opacity-10 text-warning">
                                        <i class="bi bi-hourglass h3"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- REGISTRATIONS THIS MONTH -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="text-muted mb-1">Registrations this Month</p>
                                        <h3 class="mb-0 fw-bold">0</h3>
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
                        <div class="card" style="height: 61vh;">
                            <p class="text-muted mb-1 border-bottom p-2 fw-bold">Recent Activities</p>
                            <div class="card-body overflow-y-scroll">
                                <!-- LOG -->
                                <div class="activity-item mb-3 pb-3 border-start border-3">
                                    <div class="d-flex justify-content-between align-items-start ps-3">
                                        <div>
                                            <p class="mb-1 fw-semibold">John Doe</p>
                                            <p class="mb-1 text-muted small">New student registration</p>
                                            <small class="text-muted">5 mins ago</small>
                                        </div>
                                        <span class="badge text-bg-warning text-light">Pending</span>
                                    </div>
                                </div>
                                <!-- LOG -->
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="card">
                            <p class="text-muted mb-1 border-bottom p-2 fw-bold">Messages</p>
                            <div class="card-body">
                                <div class="activity-item mb-3border-start border-3">
                                    <!-- MESSAGE -->
                                    <div class="activity-item mb-3 pb-3 border-start border-3">
                                        <div class="d-flex justify-content-between align-items-start ps-3">
                                            <div>
                                                <p class="mb-1 fw-semibold">Juliana Cruz</p>

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
                                                </button><br>

                                                <small class="text-muted">5 mins ago</small>
                                            </div>
                                            <span class="badge text-bg-warning text-light">Unread</span>
                                        </div>
                                    </div>
                                    <!-- MESSAGE -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>

<script>
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

</html>