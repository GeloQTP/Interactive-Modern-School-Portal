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

                <input type="hidden" value="alumni" name="role"> <!--ROLE (DO NOT REMOVE)-->

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

                    <div class="row g-3">
                        <div class="col-md-3">
                            <label for="firstNameInput" class="lead text-dark">First Name</label>
                            <input type="text" class="form-control form-control-sm text-dark border-1"
                                id="firstNameInput" name="firstName" required autocomplete="off">
                        </div>

                        <div class="col-md-3">
                            <label for="lastNameInput" class="lead text-dark">Last Name</label>
                            <input type="text" class="form-control form-control-sm text-dark border-1"
                                id="lastNameInput" name="lastName" required autocomplete="off">
                        </div>

                        <div class="col-md-3">
                            <label for="middleNameInput" class="lead text-dark">Middle Name</label>
                            <input type="text" class="form-control form-control-sm text-dark border-1"
                                id="middleNameInput" name="middleName" required autocomplete="off">
                        </div>

                        <div class="col-md-2 col-5 ms-md-auto">
                            <label for="extensionName" class="lead text-dark">Suffix</label>
                            <input type="text" class="form-control form-control-sm text-dark border-1"
                                id="extensionName" name="exName" autocomplete="off">
                        </div>

                        <div class="col-md-4">
                            <label for="birthdateInput" class="lead text-dark">Date of Birth</label>
                            <input type="date" class="form-control form-control-sm text-dark border-1"
                                id="birthdateInput" name="birthDate" required autocomplete="off">
                        </div>

                        <div class="col-md-1 col-3 mx-md-auto">
                            <label for="ageInput" class="lead text-dark">Age</label>
                            <input type="text" class="form-control form-control-sm text-dark text-center border-1"
                                id="ageInput" name="age" readonly autocomplete="off">
                        </div>

                        <div class="col-md-2 col-4 mx-md-auto">
                            <label for="nationalityInput" class="lead text-dark">Nationality</label>
                            <input type="text" class="form-control form-control-sm text-dark border-1"
                                id="nationalityInput" name="nationality" required autocomplete="off">
                        </div>

                        <div class="col-md-2 col-6">
                            <label for="civilStatusInput" class="lead text-dark">Civil Status</label>
                            <select class="form-select form-select-sm text-dark border-1"
                                id="civilStatusInput" name="civilStatus" required>
                                <option value="" disabled selected>Select Status</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="widow">Widow</option>
                                <option value="separated">Separated</option>
                            </select>
                        </div>

                        <div class="col-md-2 col-6 ms-auto">
                            <label for="genderInput" class="lead text-dark">Gender</label>
                            <select class="form-select form-select-sm text-dark border-1"
                                id="genderInput" name="gender" required>
                                <option value="" disabled selected>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Prefer not to say</option>
                            </select>
                        </div>

                        <h1 class="lead display-5 mt-5 mb-3 w-100 text-dark" style="border-bottom:1px solid green">
                            Contact Information
                        </h1>

                        <div class="col-md-4 col-9">
                            <label for="emailInput" class="lead text-dark">Email</label>
                            <input type="email" class="form-control form-control-sm text-dark border-1"
                                id="emailInput" name="email" oninput="validateEmail()" required autocomplete="off">
                        </div>

                        <div class="col-md-4 col-6">
                            <label for="phoneNumberInput" class="lead text-dark">Phone Number</label>
                            <input type="tel" class="form-control form-control-sm text-dark border-1"
                                id="phoneNumberInput" name="phoneNumber" required autocomplete="off">
                        </div>

                        <div class="col-md-4">
                            <label for="addressInput" class="lead text-dark">Address / House Number</label>
                            <input type="text" class="form-control form-control-sm text-dark border-1"
                                id="addressInput" name="address" required autocomplete="off">
                        </div>

                        <div class="col-md-4">
                            <label for="addressInput" class="lead text-dark">Barangay</label>
                            <input type="text" class="form-control form-control-sm text-dark border-1"
                                id="barangayInput" name="barangayInput" required autocomplete="off">
                        </div>

                        <div class="col-md-4 col-6">
                            <label for="cityInput" class="lead text-dark">City / District</label>
                            <input type="text" class="form-control form-control-sm text-dark border-1"
                                id="cityInput" name="city" required autocomplete="off">
                        </div>

                        <div class="col-md-3 col-6">
                            <label for="provinceInput" class="lead text-dark">Province</label>
                            <input type="text" class="form-control form-control-sm text-dark border-1"
                                id="provinceInput" name="province" required autocomplete="off">
                        </div>

                        <div class="col-md-1 col-3 mx-md-auto">
                            <label for="zipcodeInput" class="lead text-dark">Zip Code</label>
                            <input type="text" class="form-control form-control-sm text-dark border-1"
                                id="zipcodeInput" name="zipCode" required autocomplete="off">
                        </div>



                        <!-- ACADEMIC INFORMATION -->
                        <h1 class="lead display-5 mt-5 mb-3 w-100 text-dark" style="border-bottom:1px solid green">
                            Academic Information
                        </h1>

                        <div class="col-md-3 col-6">
                            <label for="programInput" class="lead text-dark">Program</label>
                            <select class="form-select form-select-sm text-dark border-1"
                                id="programInput" name="program" required>
                                <option value="" disabled selected>Select Program</option>
                                <option value="BEED">BEED</option>
                                <option value="BSA">BSA</option>
                                <option value="BSCS">BSCS</option>
                                <option value="BSBM">BSBM</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label class="lead text-dark">Graduation Year</label>
                            <select name="graduationYear" id="graduationYear"
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

                        <!-- CAREER INFORMATION (OPTIONAL BUT PROFESSIONAL) -->
                        <h1 class="lead display-5 mt-5 mb-3 w-100 text-dark" style="border-bottom:1px solid green">
                            Career Information (Optional)
                        </h1>

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


                        <!-- PASSWORD SECTION -->
                        <h1 class="lead display-5 mt-5 mb-3 w-100 text-dark" style="border-bottom:1px solid green">
                            Account Information
                        </h1>

                        <div class="col-md-4">
                            <label for="guardianInput" class="lead text-dark">Account Username</label>
                            <input type="text" class="form-control form-control-sm text-dark border-1"
                                id="accountUsernameInput" name="accountUsername" required autocomplete="off">
                        </div>

                        <div class="col-md-4">
                            <label for="guardianInput" class="lead text-dark">Password</label>
                            <input type="password" class="form-control form-control-sm text-dark border-1"
                                id="passwordInput" name="password" oninput="validatePassword()" required autocomplete="off">
                        </div>

                        <div class="col-md-4">
                            <label for="guardianInput" class="lead text-dark">Confirm Password</label>
                            <input type="password" class="form-control form-control-sm text-dark border-1"
                                id="confirmPassword" name="confirmPassword" oninput="validatePassword()" required autocomplete="off">
                            <span id="passwordStatus" class="text-danger" style="font-size: 13px;"></span>
                            <br>
                        </div>

                        <div class="col-md-4">
                            <label for="guardianInput" class="lead text-dark">Recovery Email </label>
                            <input type="email" class="form-control form-control-sm text-dark border-1"
                                id="recoveryEmailInput" name="recoveryInput" oninput="validateEmail()" required autocomplete="off">
                            <span id="emailStatus" class="text-danger" style="font-size: 13px;"></span>
                            <br>
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
<script type="module" src="./scripts/AlumniRegistrationPage.js"></script>
<script src="./scripts/autoAgeCalc.js"></script>
<script src="./scripts/OTP_Autonext.js"></script>
<script src="./scripts/validateAlumniInputs.js"></script>
<script>
    // LOADER ANIMATION
    const spinner = document.querySelector(".spinner-wrapper");
    window.addEventListener("load", () => {
        setTimeout(() => (spinner.style.display = "none"), 1000);
    });
</script>

</html>