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
    <title>Verify Users - Tomas Del Rosario College</title>
    <link rel="icon" type="image/png" href="/Modern Student Portal/src/img/TRC_LOGO.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./../modules/sidebar.css">
</head>

<body>

    <div class="wrapper">

        <?php
        include __DIR__ . '/../modules/sidebar.php';
        ?>

        <div class="main ms-5 ps-4">
            <nav class="navbar navbar-expand-lg bg-light border border-bottom">
                <div class="container-fluid justify-content-center" style="transform: translate(0px, 10px);">
                    <p class="text-success lead">Verify Users</p>
                </div>
            </nav>

            <div class="p-3">

                <!-- STATISTICS -->
                <div class="row g-3 mb-4">

                    <div class="col-md-6 col-lg-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="text-muted mb-1">All Pending</p>
                                        <h3 class="mb-0 fw-bold" id="totalPending">0</h3>
                                    </div>
                                    <div class="stat-icon text-warning">
                                        <i class="bi bi-hourglass h3"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="text-muted mb-1">Pending Student Registrations</p>
                                        <h3 class="mb-0 fw-bold" id="totalStudents">0</h3>
                                    </div>
                                    <div class="stat-icon text-info">
                                        <i class="bi bi-people h2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="text-muted mb-1">Pending Alumni Registrations</p>
                                        <h3 class="mb-0 fw-bold" id="totalStudents">0</h3>
                                    </div>
                                    <div class="stat-icon text-primary">
                                        <i class="bi bi-mortarboard h2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="text-muted mb-1">Teachers</p>
                                        <h3 class="mb-0 fw-bold" id="totalStudents">0</h3>
                                    </div>
                                    <div class="stat-icon text-success">
                                        <i class="bi bi-eyeglasses h1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- STATISTIC CARDS -->


                <!-- FILTER -->
                <div class="row pt-4">

                    <div class="col-md-4">
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="visible-addon"><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control rounded-2" placeholder="Search by First Name..." aria-label="Username" aria-describedby="visible-addon" name="searchbar">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <select class="form-select mb-2" aria-label="Large select example" name="selectByProgram">
                            <option value="" disabled selected>Filter by Program</option>
                            <option value="education">Education</option>
                            <option value="accounting">Accounting</option>
                            <option value="computer_science">Computer Science</option>
                            <option value="business_management">Business Management</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <select class="form-select mb-3" aria-label="Large select example" name="selectByRole">
                            <option value="" disabled selected>Filter by Role</option>
                            <option value="education">Student</option>
                            <option value="accounting">Alumni</option>
                            <option value="computer_science">Teacher</option>
                        </select>
                    </div>
                </div>
                <!-- FILTER -->

                <!-- TABLE -->
                <table class="table table-hover border">
                    <thead class="text-center">
                        <tr>

                            <th scope="col">Role</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Operations</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>
                                <h6><span class="badge text-bg-secondary" style="transform: translate(0px, 4px);">New</span></h6>
                            </td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-success"><i class="bi bi-check2-circle h5"></i></button>
                                <button type="button" class="btn btn-sm btn-info"><i class="bi bi-eye h5"></i></button>
                                <button type="button" class="btn btn-sm btn-danger"><i class="bi bi-trash h5"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- TABLE -->

            </div>




        </div>

    </div>

</body>

<script src="../scripts/sidebar.js"></script>

<script>
    loadDashboardStats(); // initial load
    setInterval(loadDashboardStats, 5000); // refresh every 5s

    async function loadDashboardStats() {
        try {
            const res = await fetch("../../../classes/dashboardStats.php", {
                method: "POST",
            });

            if (!res.ok) throw new Error("Network Response was not ok.");

            const data = await res.json();

            document.getElementById("totalPending").textContent = data.totalPendingRegistrations

        } catch (error) {
            document.getElementById("totalStudents").textContent = 0;
            document.getElementById("pendingRegistrations").textContent = 0;
        }
    }
</script>

</html>