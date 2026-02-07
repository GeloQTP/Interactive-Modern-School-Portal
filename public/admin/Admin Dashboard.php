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
        <aside id="sidebar">
            <div class="d-flex">
                <button id="toggle-btn">
                    <i class="bi bi-grid"></i>
                </button>

                <div class="sidebar-logo">
                    <a href="#">ADMIN</a>
                </div>
            </div>

            <ul class="sidebar-nav">

                <li class="navbar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-speedometer2"></i>
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

        <div class="main">
            <nav class="navbar navbar-expand-lg bg-light border border-bottom d-flex pt-4">
                <div class="container-fluid justify-content-center">
                    <p class="text-success lead">Welcome Admin</p>
                </div>
            </nav>

            <div class="row">

            </div>

        </div>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

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