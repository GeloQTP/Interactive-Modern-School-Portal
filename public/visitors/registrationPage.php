<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laragon College University</title>
    <link rel="icon" type="image/png" href="./../../src/img/YellowElephant.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./../../styles/style.css">
</head>

<body>

    <!-- SPINNER -->
    <div class="spinner-wrapper" aria-hidden="true">
        <div class="spinner-grow text-dark-emphasis" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container my-1">
                <a href="landingPage.php" class="navbar-brand fw-bold d-flex align-items-center">
                    <span class="px-2">
                        <img src="./../../src/img/YellowElephant.png" alt="Laragon logo" style="width: 50px; border-radius: 100px;">
                    </span>
                    <span class="d-none d-sm-block">
                        <span class="text-warning lead">Laragon</span> University
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Admission</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Events</a></li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-warning bg-dark text-warning"
                                onclick="window.location.href='loginPage.php'">
                                Login
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="bg-dark text-light py-5 p-lg-5 mt-5">
            <div class="container">

                <form class="input-group d-flex align-items-center justify-content-center"
                    id="registrationForm" method="post">

                    <h1 class="lead display-4 mb-5 w-100 text-light" style="border-bottom:1px solid orange">
                        Personal Information
                    </h1>

                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="firstNameInput" class="lead text-warning">First Name</label>
                            <input type="text" class="form-control bg-secondary text-light border-0"
                                id="firstNameInput" name="firstName" required>
                        </div>

                        <div class="col-md-4">
                            <label for="lastNameInput" class="lead text-warning">Last Name</label>
                            <input type="text" class="form-control bg-secondary text-light border-0"
                                id="lastNameInput" name="lastName" required>
                        </div>

                        <div class="col-md-2">
                            <label for="middleNameInput" class="lead text-warning">Middle Name</label>
                            <input type="text" class="form-control bg-secondary text-light border-0"
                                id="middleNameInput" name="middleName" required>
                        </div>

                        <div class="col-md-1 col-3 ms-md-auto">
                            <label for="extensionName" class="lead text-warning">Ex.</label>
                            <input type="text" class="form-control bg-secondary text-light border-0"
                                id="extensionName" name="exName" placeholder="e.g Jr">
                        </div>

                        <div class="col-md-4">
                            <label for="birthdateInput" class="lead text-warning">Date of Birth</label>
                            <input type="date" class="form-control bg-secondary text-light border-0"
                                id="birthdateInput" name="birthDate" required>
                        </div>

                        <div class="col-md-1 col-3 mx-md-auto">
                            <label for="ageInput" class="lead text-warning">Age</label>
                            <input type="text" class="form-control bg-secondary text-light text-center border-0"
                                id="ageInput" name="age" readonly>
                        </div>

                        <div class="col-md-2 col-4 mx-md-auto">
                            <label for="nationalityInput" class="lead text-warning">Nationality</label>
                            <input type="text" class="form-control bg-secondary text-light border-0"
                                id="nationalityInput" name="nationality" required>
                        </div>

                        <div class="col-md-2 col-6">
                            <label for="civilStatusInput" class="lead text-warning">Civil Status</label>
                            <select class="form-select bg-secondary text-light border-0"
                                id="civilStatusInput" name="civilStatus" required>
                                <option value="" selected></option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="widow">Widow</option>
                                <option value="separated">Separated</option>
                            </select>
                        </div>

                        <div class="col-md-2 col-6 ms-auto">
                            <label for="genderInput" class="lead text-warning">Gender</label>
                            <select class="form-select bg-secondary text-light border-0"
                                id="genderInput" name="gender" required>
                                <option value="" selected></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Prefer not to say</option>
                            </select>
                        </div>

                        <h1 class="lead display-4 mt-5 mb-3 w-100 text-light" style="border-bottom:1px solid orange">
                            Contact Information
                        </h1>

                        <div class="col-md-4 col-9">
                            <label for="emailInput" class="lead text-warning">Email</label>
                            <input type="email" class="form-control bg-secondary text-light border-0"
                                id="emailInput" name="email" required autocomplete="email">
                        </div>

                        <div class="col-md-4 col-6">
                            <label for="phoneNumberInput" class="lead text-warning">Phone Number</label>
                            <input type="tel" class="form-control bg-secondary text-light border-0"
                                id="phoneNumberInput" name="phoneNumber" required autocomplete="tel">
                        </div>

                        <div class="col-md-4">
                            <label for="addressInput" class="lead text-warning">Complete Address</label>
                            <input type="text" class="form-control bg-secondary text-light border-0"
                                id="addressInput" name="address" required autocomplete="street-address">
                        </div>

                        <div class="col-md-4 col-6">
                            <label for="cityInput" class="lead text-warning">City</label>
                            <input type="text" class="form-control bg-secondary text-light border-0"
                                id="cityInput" name="city" required>
                        </div>

                        <div class="col-md-4 col-6">
                            <label for="provinceInput" class="lead text-warning">Province</label>
                            <input type="text" class="form-control bg-secondary text-light border-0"
                                id="provinceInput" name="province" required>
                        </div>

                        <div class="col-md-1 col-3 mx-md-auto">
                            <label for="zipcodeInput" class="lead text-warning">Zip Code</label>
                            <input type="text" class="form-control bg-secondary text-light border-0"
                                id="zipcodeInput" name="zipCode" required>
                        </div>

                        <h1 class="lead display-4 mt-5 mb-3 w-100 text-light" style="border-bottom:1px solid orange">
                            Academic Information
                        </h1>

                        <div class="col-md-3 col-6">
                            <label for="programInput" class="lead text-warning">Program</label>
                            <select class="form-select bg-secondary text-light border-0"
                                id="programInput" name="program" required>
                                <option value="" selected></option>
                                <option value="education">Education</option>
                                <option value="accounting">Accounting</option>
                                <option value="computer_science">Computer Science</option>
                                <option value="business_management">Business Management</option>
                            </select>
                        </div>

                        <div class="col-md-3 col-6">
                            <label for="yearLevelInput" class="lead text-warning">Year Level</label>
                            <select class="form-select bg-secondary text-light border-0"
                                id="yearLevelInput" name="yearLevel" required>
                                <option value="" selected></option>
                                <option value="1stYear">1st Year</option>
                                <option value="2ndYear">2nd Year</option>
                                <option value="3rdYear">3rd Year</option>
                                <option value="4thYear">4th Year</option>
                            </select>
                        </div>

                        <div class="col-md-3 col-6">
                            <label for="studentType" class="lead text-warning">Student Type</label>
                            <select class="form-select bg-secondary text-light border-0"
                                id="studentType" name="studentType" required>
                                <option value="" selected></option>
                                <option value="newStudent">New Student</option>
                                <option value="returnee">Returnee</option>
                                <option value="transferee">Transferee</option>
                            </select>
                        </div>

                        <div class="col-md-3 col-6">
                            <label for="enrollmentType" class="lead text-warning">Enrollment Type</label>
                            <select class="form-select bg-secondary text-light border-0"
                                id="enrollmentType" name="enrollmentType" required>
                                <option value="" selected></option>
                                <option value="regular">Regular</option>
                                <option value="irregular">Irregular</option>
                            </select>
                        </div>

                        <h1 class="lead display-4 mt-5 mb-3 w-100 text-light" style="border-bottom:1px solid orange">
                            Emergency Contact
                        </h1>

                        <div class="col-md-4">
                            <label for="guardianInput" class="lead text-warning">Guardian</label>
                            <input type="text" class="form-control bg-secondary text-light border-0"
                                id="guardianInput" name="guardianName" required>
                        </div>

                        <div class="col-md-4">
                            <label for="relationshipInput" class="lead text-warning">Relationship</label>
                            <input type="text" class="form-control bg-secondary text-light border-0"
                                id="relationshipInput" name="relationship" required>
                        </div>

                        <div class="col-md-4">
                            <label for="guardianphoneInput" class="lead text-warning">Guardian's Contact Number</label>
                            <input type="tel" class="form-control bg-secondary text-light border-0"
                                id="guardianphoneInput" name="guardianPhone" required>
                        </div>

                        <div class="col-md-4">
                            <label for="guardianmailInput" class="lead text-warning">Guardian Email</label>
                            <input type="email" class="form-control bg-secondary text-light border-0"
                                id="guardianmailInput" name="guardianEmail" required>
                        </div>
                    </div>

                    <div class="me-auto mt-5">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="termsCheck" required>
                            <label class="form-check-label">
                                I agree to the
                                <a class="text-warning" onclick="console.log('EULA')">Terms and Conditions</a>
                                and
                                <a class="text-warning" onclick="console.log('PP')">Privacy Policy</a>
                            </label>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-flex justify-content-md-end mt-5 ms-auto">
                        <button type="button" class="btn btn-outline-warning"
                            onclick="window.location.href='landingPage.php'">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-warning" id="submitBtn">
                            Register
                        </button>
                    </div>

                </form>

            </div>
        </section>
    </main>

    <footer>
        <div class="bg-dark text-light text-center p-3">
            <p class="mb-0">&copy; 2024 Laragon College University. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // LOADER ANIMATION
        const spinner = document.querySelector('.spinner-wrapper');

        window.addEventListener('load', () => {
            setTimeout(() => spinner.style.display = 'none', 1000);
        });

        // AUTOMATED AGE CALCULATION AND DISPLAY
        const ageInput = document.getElementById("ageInput");
        document.getElementById("birthdateInput").addEventListener("change", function() {
            const birthDate = new Date(this.value);
            const today = new Date();
            let age = today.getFullYear() - birthDate.getFullYear();
            const m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) age--;
            ageInput.value = age;
        });
    </script>

</body>

</html>