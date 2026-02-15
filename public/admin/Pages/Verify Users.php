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
    <!-- TOASTS SECTION -->

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

                <?php
                include __DIR__ . '/../modules/pendingStatisticsCards.php'; // STATISTICS CARDS
                ?>

                <?php
                include __DIR__ . '/../modules/viewStudentModal.php'; // MODAL
                ?>

                <!-- FILTER -->
                <div class="row pt-4">

                    <div class="col-md-4">
                        <div class="input-group mb-2">
                            <span class="input-group-text" id="visible-addon"><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control rounded-2" placeholder="Search by First Name..." aria-label="Username" aria-describedby="visible-addon" name="searchbar">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <select class="form-select mb-2" aria-label="Large select example" onchange="loadStudentRegistration(this.value)" id="filterbyProgram">
                            <option value="show_all">Show All</option>
                            <option value="education">Education</option>
                            <option value="accounting">Accounting</option>
                            <option value="computer_science">Computer Science</option>
                            <option value="business_management">Business Management</option>
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
                            <th scope="col">Course</th>
                            <th scope="col">Operations</th>
                        </tr>
                    </thead>
                    <tbody class="text-center" id="table_body">
                        <tr>
                            <td>
                                <h6><span class="badge bg-${badge_color} text-light" style="transform: translate(0px, 4px);">${role}</span></h6>
                            </td>
                            <td>${FirstName}</td>
                            <td>${LastName}</td>
                            <td>${data.Program}</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-success" onclick="verifyStudent()"><i class="bi bi-check2-circle h5"></i></button>
                                <button type="button" class="btn btn-sm btn-info" onclick="viewStudent()" data-bs-toggle="modal" data-bs-target="#viewStudentDetailsModal"><i class="bi bi-eye h5"></i></button>
                                <button type="button" class="btn btn-sm btn-danger" onclick="rejectStudent()"><i class="bi bi-trash h5"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- TABLE -->

            </div>




        </div>

    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="../scripts/sidebar.js"></script>
<script src="../scripts/VerifyUsers.js"></script>

<script>
    loadDashboardStats();
    loadStudentRegistration();
    setInterval(loadDashboardStats, 5000);
    setInterval(loadStudentRegistration, 5000);

    async function loadDashboardStats() { // LOAD DASHBOARD CARDS

        try {
            const res = await fetch("../../../api/dashboardStats.php", {
                method: "POST",
            });

            if (!res.ok) throw new Error("Network Response was not ok.");

            const data = await res.json();

            document.getElementById("totalPending").textContent = data.totalPendingRegistrations;
            document.getElementById("totalPendingStudents").textContent = data.totalStudentRegistrations;

        } catch (error) {
            document.getElementById("totalStudents").textContent = 0;
            document.getElementById("pendingRegistrations").textContent = 0;
        }
    }

    async function loadStudentRegistration(filter) { // LOAD STUDENT REGISTRATION LIST

        const filterBy = filter || document.getElementById("filterbyProgram").value;

        try {
            const response = await fetch(`../../../api/getRegistrationList.php`, {
                method: 'POST',
                body: new URLSearchParams({
                    filterBy: filterBy
                }),
                credentials: "same-origin"
            });

            if (!response.ok) throw new Error

            const data = await response.json();

            const list = data.map(data => {

                const role = data.role;

                const badgeColors = {
                    student: "info",
                    alumni: "primary",
                };

                const badge_color = badgeColors[role] || "secondary";


                const FirstName = data.FirstName;
                const LastName = data.LastName;

                return `
                        <tr>
                            <td>
                                <h6><span class="badge bg-${badge_color} text-light" style="transform: translate(0px, 4px);">${role}</span></h6>
                            </td>
                                <td>${FirstName}</td>
                                <td>${LastName}</td>
                                <td>${data.Program}</td>
                             <td>
                                <button type="button" class="btn btn-sm btn-success" onclick="verifyStudent(${data.student_id})"><i class="bi bi-check2-circle h5"></i></button>
                                <button type="button" class="btn btn-sm btn-info" onclick="viewStudent(${data.student_id})" data-bs-toggle="modal" data-bs-target="#viewStudentDetailsModal"><i class="bi bi-eye h5"></i></button>
                                <button type="button" class="btn btn-sm btn-danger" onclick="rejectStudent(${data.student_id})"><i class="bi bi-trash h5"></i></button>
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

    async function verifyStudent(student_id) { // SEND VERIFY REQUEST
        try {

            const res = await fetch(`../../../api/AdminVerificationController.php`, {
                method: 'POST',
                body: new URLSearchParams({
                    student_id: student_id,
                    action: 'verify'
                }),
                credentials: 'same-origin',
            });

            if (!res.ok) {
                throw new Error(`HTTP error! Status: ${res.status}`);
            }

            const data = await res.text();
            console.log(data);

        } catch (error) {
            console.error("View student failed:", error);
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


            placeholders.forEach((el) => {
                el.classList.remove("placeholder", "bg-dark");
            });

            populateViewModal(data);

        } catch (error) {
            console.error("View student failed:", error);
        } finally {

        }

    }

    async function rejectStudent(student_id) { // SEND REJECT REQUEST

        try {

            const res = await fetch(`../../../api/AdminVerificationController.php`, {
                method: 'POST',
                body: new URLSearchParams({
                    student_id: student_id,
                    action: 'reject'
                }),
                credentials: 'same-origin',
            });

            if (!res.ok) {
                throw new Error(`HTTP error! Status: ${res.status}`);
            }

            const data = await res.text();
            console.log(data);

            // * loadPendingList(); LOAD AGAIN TO REFRESH THE LIST

        } catch (error) {
            console.error("View student failed:", error);
        } finally {

        }
    }
</script>

</html>