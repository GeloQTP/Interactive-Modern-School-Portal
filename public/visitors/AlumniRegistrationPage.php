<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alumni Register - Tomas Del Rosario College</title>
    <link rel="icon" type="image/png" href="/Modern Student Portal/src/img/TRC_LOGO.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./../../styles/style.css
    ">
</head>

<body>

    <?php
    include __DIR__ . '/modules/Spinner&Toast.php'; // SPINNER AND TOAST NOTIFICATION
    ?>

    <header>
        <?php
        include __DIR__ . '/modules/NavigationBar.php'; // NAVIGATION BAR
        ?>
    </header>

    <main>
        <section class="bg-light py-5 p-lg-5 mt-5">
            <div class="container">

                <h1 class="lead display-5 mb-3 w-100 text-dark text-center mb-4" style="border-bottom:1px solid green">
                    Alumni Registration
                </h1>

                <!-- STUDENT / ALUMNI SELECTION -->
                <div class="d-flex justify-content-center mb-4">
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-outline-success" onclick="window.location.href='/Modern Student Portal/public/visitors/RegistrationPage.php'">Student</button>
                        <button type="button" class="btn btn-outline-success disabled">or</button>
                        <button type="button" class="btn btn-outline-success active" onclick="window.location.href='/Modern Student Portal/public/visitors/AlumniRegistrationPage.php'">Alumni</button>
                    </div>
                </div>

                <form id="registrationForm">
                    <h1 class="lead display-5 mb-5 w-100 text-dark" style="border-bottom:1px solid green">
                        Personal Information
                    </h1>

                    <!-- PERSONAL INFORMATION -->
                    <div class="row g-3">

                        <div class="col-md-3">
                            <label for="firstNameInput" class="lead text-dark">First Name</label>
                            <input type="text" class="form-control form-control-sm text-dark border-1" id="firstNameInput" name="firstName" required autocomplete="off">
                        </div>

                        <div class="col-md-3">
                            <label for="lastNameInput" class="lead text-dark">Last Name</label>
                            <input type="text" class="form-control form-control-sm text-dark border-1" id="lastNameInput" name="lastName" required autocomplete="off">
                        </div>

                        <div class="col-md-3">
                            <label for="middleNameInput" class="lead text-dark">Middle Name</label>
                            <input type="text" class="form-control form-control-sm text-dark border-1" id="middleNameInput" name="middleName" required autocomplete="off">
                        </div>

                        <div class="col-md-2 col-5 ms-md-auto">
                            <label for="extensionName" class="lead text-dark">Suffix</label>
                            <input type="text" class="form-control form-control-sm text-dark border-1" id="extensionName" name="exName" autocomplete="off">
                        </div>

                        <div class="col-md-3">
                            <label class="lead text-dark">Gender</label>
                            <select name="gender" class="form-select form-select-sm text-dark border-1" required>
                                <option value="" disabled selected>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label class="lead text-dark">Date of Birth</label>
                            <input type="date" name="dob"
                                class="form-control form-control-sm text-dark border-1" required>
                        </div>

                        <div class="col-md-3">
                            <label class="lead text-dark">Contact Number</label>
                            <input type="text" name="contactNumber"
                                class="form-control form-control-sm text-dark border-1"
                                required autocomplete="off">
                        </div>

                        <div class="col-md-3">
                            <label class="lead text-dark">Email</label>
                            <input type="email" name="email"
                                class="form-control form-control-sm text-dark border-1"
                                required autocomplete="off">
                        </div>

                    </div>


                    <!-- ACADEMIC INFORMATION -->
                    <h1 class="lead display-5 mb-5 w-100 text-dark mt-5" style="border-bottom:1px solid green">
                        Academic Information
                    </h1>

                    <div class="row g-3 mt-2">

                        <div class="col-md-3">
                            <label class="lead text-dark">Student ID</label>
                            <input type="text" name="studentID"
                                class="form-control form-control-sm text-dark border-1"
                                required autocomplete="off">
                        </div>

                        <div class="col-md-3">
                            <label class="lead text-dark">Program</label>
                            <select name="program"
                                class="form-select form-select-sm text-dark border-1" required>
                                <option value="" disabled selected>Select Program</option>
                                <option value="education">Education</option>
                                <option value="accounting">Accounting</option>
                                <option value="computer_science">Computer Science</option>
                                <option value="business_management">Business Management</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label class="lead text-dark">Graduation Year</label>
                            <select name="graduationYear"
                                class="form-select form-select-sm text-dark border-1" required>
                                <option value="" disabled selected>Select Year</option>
                                <?php
                                $currentYear = date("Y");
                                for ($i = $currentYear; $i >= $currentYear - 50; $i--) {
                                    echo "<option value='$i'>$i</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label class="lead text-dark">Honors (Optional)</label>
                            <input type="text" name="honors"
                                class="form-control form-control-sm text-dark border-1"
                                autocomplete="off">
                        </div>

                    </div>

                    <!-- CAREER INFORMATION (OPTIONAL BUT PROFESSIONAL) -->
                    <h1 class="lead display-5 mb-5 w-100 text-dark mt-5" style="border-bottom:1px solid green">
                        Career Information (Optional)
                    </h1>

                    <div class="row g-3 mt-2">

                        <div class="col-md-3">
                            <label class="lead text-dark">Employment Status</label>
                            <select name="employmentStatus"
                                class="form-select form-select-sm text-dark border-1">
                                <option value="" disabled selected>Select Status</option>
                                <option value="Employed">Employed</option>
                                <option value="Self-employed">Self-employed</option>
                                <option value="Unemployed">Unemployed</option>
                                <option value="Studying">Studying Further</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label class="lead text-dark">Company Name</label>
                            <input type="text" name="companyName"
                                class="form-control form-control-sm text-dark border-1"
                                autocomplete="off">
                        </div>

                        <div class="col-md-3">
                            <label class="lead text-dark">Job Title</label>
                            <input type="text" name="jobTitle"
                                class="form-control form-control-sm text-dark border-1"
                                autocomplete="off">
                        </div>

                        <div class="col-md-3">
                            <label class="lead text-dark">Work Location</label>
                            <input type="text" name="workLocation"
                                class="form-control form-control-sm text-dark border-1"
                                autocomplete="off">
                        </div>

                    </div>


                    <!-- PASSWORD SECTION -->
                    <h1 class="lead display-5 mb-5 w-100 text-dark mt-5" style="border-bottom:1px solid green">
                        Account Security
                    </h1>

                    <div class="row g-3 mt-2">

                        <div class="col-md-3">
                            <label class="lead text-dark">Password</label>
                            <input type="password" name="password"
                                class="form-control form-control-sm text-dark border-1"
                                required>
                        </div>

                        <div class="col-md-3">
                            <label class="lead text-dark">Confirm Password</label>
                            <input type="password" name="confirmPassword"
                                class="form-control form-control-sm text-dark border-1"
                                required>
                        </div>

                    </div>


                    <?php
                    include __DIR__ . '/modules/eulaModal.php'; // EULA MODAL
                    ?>

                    <div class="d-grid gap-2 d-flex justify-content-md-end mt-5 ms-auto">
                        <button type="button" class="btn btn-outline-success"
                            onclick="window.location.href='Landing Page.php'">
                            Cancel
                        </button>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#eulaModal" id="registerBtn">
                            Register
                        </button>
                    </div>

                </form>

                <?php
                include __DIR__ . '/modules/OTPModal.php'; // OTP MODAL
                ?>

            </div>
        </section>
    </main>

    <footer>
        <div class="bg-light text-dark text-center p-3">
            <p class="mb-0">&copy; 2026 Tomas Del Rosario College. All rights reserved.</p>
        </div>
    </footer>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="./scripts/AlumniRegistrationPage.js"></script>
<script>
    // LOADER ANIMATION
    const spinner = document.querySelector(".spinner-wrapper");

    window.addEventListener("load", () => {
        setTimeout(() => (spinner.style.display = "none"), 1000);
    });
</script>

</html>