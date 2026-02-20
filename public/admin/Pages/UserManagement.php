<?php
// session_start();

// if(!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin'){
//     header('Location: ./public/visitors/Landing%20Page.php');
//     exit();
// }
include __DIR__ . '/../../backend/getCourses.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management - Tomas Del Rosario College</title>
    <link rel="icon" type="image/png" href="/Modern Student Portal/src/img/TRC_LOGO.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./../components/sidebar.css">
</head>

<body>

    <div class="wrapper">
        <?php
        include __DIR__ . '/../components/sidebar.php';
        ?>

        <div class="main ms-5 ps-4">

            <nav class="navbar navbar-expand-lg bg-light border border-bottom">
                <div class="container-fluid justify-content-center" style="transform: translate(0px, 10px);">
                    <p class="text-success lead">Verify Users</p>
                </div>
            </nav>

            <div class="p-3">
                <div class="row g-3 mb-4">

                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="text-muted mb-1">Total Users</p>
                                        <h3 class="mb-0 fw-bold" id="totalStudents">0</h3>
                                    </div>
                                    <div class="stat-icon text-info">
                                        <i class="bi bi-people h2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="text-muted mb-1">Active Users</p>
                                        <h3 class="mb-0 fw-bold">0</h3>
                                    </div>
                                    <div class="stat-icon bg-opacity-10 text-success">
                                        <i class="bi bi-circle-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="text-muted mb-1">Inactive Users</p>
                                        <h3 class="mb-0 fw-bold">0</h3>
                                    </div>
                                    <div class="stat-icon text-secondary">
                                        <i class="bi bi-circle-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- FILTER OPTIONS -->
                <div class="row pt-4">

                    <div class="col-md-4">
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="visible-addon"><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control rounded-2" placeholder="Search by Last Name..." aria-label="Username" aria-describedby="visible-addon" name="searchbar" onkeyup="searchStudent(this.value)" id="searchInput">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <select class="form-select mb-2" aria-label="Large select example" onchange="loadStudentRegistration(this.value)" id="filterbyProgram">
                            <option value="" disabled selected>Filter by Program</option>
                            <option value="show_all">Show All</option>
                            <?php
                            while ($row = $result->fetch_assoc()) {
                            ?>
                                <option value="<?= $row['course_name'] ?>"><?= $row['course_name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <button class="btn btn-success" onclick="location.reload()">
                            <i class="bi bi-arrow-clockwise"></i>
                        </button>
                    </div>

                </div>

                <!-- STUDENT ACCOUNT CARDS -->
                <div class="row g-3">

                    <div class="col-md-2 mb-4">
                        <div class="card shadow-sm border-0 student-card h-100">
                            <div class="card-body d-flex flex-column">

                                <!-- Student Name -->
                                <h6 class="fw-semibold mb-1">Juan Dela Cruz</h6>

                                <!-- Student Info -->
                                <small class="text-muted d-block">Student ID: 2025-00123</small>
                                <small class="text-muted d-block">BS Computer Science</small>

                                <!-- Status Badge -->
                                <div class="mt-2">
                                    <span class="badge bg-success-subtle text-success">
                                        Verified & Enrolled
                                    </span>
                                </div>

                                <!-- Divider -->
                                <hr class="my-3">

                                <!-- Action Buttons -->
                                <div class="ms-auto">
                                    <button class="btn text-info" title="View">
                                        <i class="bi bi-eye"></i>
                                    </button>

                                    <button class="btn text-sucess" title="Edit">
                                        <i class="bi bi-pencil"></i>
                                    </button>

                                    <button class="btn text-danger" title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </button>
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
<script src="./../scripts/sidebar.js"></script>

</html>