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

    <?php
    include __DIR__ . '/../components/viewUserModal.php'; // VIEW MODAL
    ?>

    <div class="wrapper">
        <?php
        include __DIR__ . '/../components/sidebar.php'; // SIDEBAR
        ?>

        <div class="main ms-5 ps-4">

            <nav class="navbar navbar-expand-lg bg-light border border-bottom">
                <div class="container-fluid justify-content-center" style="transform: translate(0px, 10px);">
                    <p class="text-success lead">Manage Users</p>
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
                <div class="table-container border">
                    <table class="table table-hover mb-0">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">Role</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Course</th>
                                <th scope="col">Status</th>
                                <th scope="col">Operations</th>
                            </tr>
                        </thead>
                        <tbody class="text-center" id="table_body">
                            <!-- dynamic rows -->
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="./../scripts/sidebar.js"></script>

<script>
    loadStudentRegistration();

    async function loadStudentRegistration(filter) { // LOAD STUDENT REGISTRATION LIST

        const filterBy = filter || document.getElementById("filterbyProgram").value;
        const searchQueue = document.getElementById("searchInput").value;

        try {
            const response = await fetch(`../../../api/getRegistrationList.php`, {
                method: 'POST',
                body: new URLSearchParams({
                    filterBy: filterBy,
                    searchQueue: searchQueue,
                    current_status: 'verified',
                }),
                credentials: "same-origin"
            });

            if (!response.ok) throw new Error

            const data = await response.json();

            const list = data.map(data => {

                const role = data.role;

                const badgeColors = {
                    Student: "info",
                    Alumni: "primary",
                };

                const statusColors = {
                    verified: 'success',

                };

                const badge_color = badgeColors[role] || "secondary";


                const FirstName = data.FirstName;
                const LastName = data.LastName;

                return `
                        <tr>
                                <td>
                                    <h6>
                                    <span class="badge bg-${badge_color} text-light" style="transform: translate(0px, 4px);">${data.role}</span>
                                    </h6>
                                </td>
                                <td>${data.FirstName}</td>
                                <td>${data.LastName}</td>
                                <td>${data.account_username}</td>
                                <td>${data.Program}</td>
                                 <td>
                                    <h6>
                                    <span class="badge bg-success text-light" style="transform: translate(0px, 4px);">${data.current_status}</span>
                                    </h6>
                                 </td>
                                <td>
                                    <button type="button" class="btn text-primary" onclick="viewStudent(${data.student_id})" data-bs-toggle="modal" data-bs-target="#viewStudentDetailsModal"><i class="bi bi-eye h5"></i></button>
                                    <button type="button" class="btn text-info" onclick="viewStudent(${data.student_id})"><i class="bi bi-pencil"></i></button>
                                    <button type="button" class="btn text-danger" onclick="deletionConfirmation(${data.student_id})"><i class="bi bi-trash h5"></i></button>
                                </td>
                            </tr>
                `;
            }).join('');

            document.getElementById("table_body").innerHTML = list;

        } catch (Error) {
            console.log("Something went wrong. Can't Load Student Registrations");
        } finally {

        }

    }

    async function searchStudent(searchQueue) { // SEARCH STUDENT MANUALLY

        const filterbyProgram = document.getElementById("filterbyProgram").value || '';

        const searchInputVal = document.getElementById("searchInput").value;
        if (!searchInputVal || searchInputVal === '') { // CHECKS IF SEARCH INPUT IS EMPTY
            loadStudentRegistration();
            return;
        }

        try {
            const res = await fetch(`../../../api/search.php`, {
                method: 'POST',
                body: new URLSearchParams({
                    searchQueue: searchQueue,
                    filterbyProgram: filterbyProgram,
                    current_status: 'verified'
                }),
                credentials: 'same-origin'
            });

            const data = await res.json();

            const list = data.map(data => {

                const role = data.role;

                const badgeColors = {
                    Student: "info",
                    Alumni: "primary",
                };

                const badge_color = badgeColors[role] || "secondary";


                const FirstName = data.FirstName;
                const LastName = data.LastName;

                return `
                       <tr>
                                <td>
                                    <h6><span class="badge bg-${badge_color} text-light" style="transform: translate(0px, 4px);">${data.role}</span></h6>
                                </td>
                                <td>${data.FirstName}</td>
                                <td>${data.LastName}</td>
                                <td>${data.account_username}</td>
                                <td>${data.Program}</td>
                                <td>${data.current_status}</td>
                                <td>
                                    <button type="button" class="btn text-primary" onclick="viewStudent(${data.student_id})" data-bs-toggle="modal" data-bs-target="#viewStudentDetailsModal"><i class="bi bi-eye h5"></i></button>
                                    <button type="button" class="btn text-info" onclick="viewStudent(${data.student_id})"><i class="bi bi-pencil"></i></button>
                                    <button type="button" class="btn text-danger" onclick="deletionConfirmation(${data.student_id})"><i class="bi bi-trash h5"></i></button>
                                </td>
                            </tr>
                `;
            }).join('');

            document.getElementById("table_body").innerHTML = list;

        } catch (error) {

        } finally {

        }

    }

    function populateViewModal(data) { // POPULATE MODAL FIELDS

        document.getElementById("student_name").innerHTML = data.FirstName;

        Object.keys(data).forEach(key => {
            const element = document.getElementById(key);
            if (element) {
                element.textContent = data[key] || "N/A";
            }
        });
    }

    async function viewStudent(student_id) { // SEND VIEW REQUEST 
        const placeholders = document.querySelectorAll(".placeholders");

        placeholders.forEach((el) => {
            el.classList.add("placeholder", "bg-dark");
        });

        try {

            const res = await fetch(`../../../api/AdminVerificationController.php`, {
                method: 'POST',
                body: new URLSearchParams({
                    student_id: student_id,
                    action: 'view'
                }),
                credentials: 'same-origin',
            });

            if (!res.ok) {
                throw new Error(`HTTP error! Status: ${res.status}`);
            }

            const data = await res.json();

            document.getElementById("verify_student").value = student_id;

            placeholders.forEach((el) => {
                el.classList.remove("placeholder", "bg-dark");
            });

            populateViewModal(data);

        } catch (error) {
            console.error("View student failed:", error);
        } finally {

        }

    }
</script>

</html>