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
    <div class="spinner-wrapper">
        <div class="spinner-grow text-dark-emphasis" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <header>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container my-1">
                <a href="landingPage.php" class="navbar-brand fw-bold d-flex align-items-center">
                    <span class="px-2"><img src="./../../src/img/YellowElephant.png" alt="yellow elephant logo" style="width: 50px; border-radius: 100px;"></span>
                    <span class="d-none d-sm-block"><span class="text-warning lead">Laragon</span> University</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Admission</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Events</a></li>
                        <li class="nav-item"><button class="btn btn-warning bg-dark text-warning" onclick="window.location.href='loginPage.php'">Login</button></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="bg-dark text-light py-5 p-lg-5 mt-5">
            <div class="container">

                <form class="input-group d-flex align-items-center justify-content-center">

                    <h1 class="lead display-4 mb-5 w-100 text-light" style="border-bottom:1px solid orange">Personal Information</h1>

                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="firstName" class="lead text-warning">First Name</label>
                            <input type="text" class="form-control bg-secondary focus-ring focus-ring-light text-light border-0" id="firstNameInput" name="firstName" required>
                        </div>
                        <div class="col-md-4">
                            <label for="lastName" class="lead text-warning">Last Name</label>
                            <input type="text" class="form-control bg-secondary focus-ring focus-ring-light text-light border-0" id="lastNameInput" name="lastName" required>
                        </div>
                        <div class="col-md-2">
                            <label for="lastName" class="lead text-warning">Middle Name</label>
                            <input type="text" class="form-control bg-secondary focus-ring focus-ring-light text-light border-0" id="middleNameInput" name="middleName" required>
                        </div>
                        <div class="col-md-1 col-3 ms-md-auto">
                            <label for="lastName" class="lead text-warning">Ex.</label>
                            <input type="text" class="form-control bg-secondary focus-ring focus-ring-light text-light border-0" name" id="middleNameInput" placeholder="e.g Jr" name="exName" required>
                        </div>

                        <div class="col-md-4">
                            <label for="birthdate" class="lead text-warning">Date of Birth</label>
                            <input type="date" class="form-control bg-secondary focus-ring focus-ring-light text-light border-0 text-light" id="birthdateInput" name="birthDate" required>
                        </div>
                        <div class="col-md-1 col-3 me-md-auto">
                            <label for="lastName" class="lead text-warning">Age</label>
                            <input class="form-control bg-secondary border-0 text-light" type="text" id="ageInput" name="age" readonly>
                        </div>
                        <div class="col-md-2 col-4 mx-md-auto">
                            <label for="firstName" class="lead text-warning">Nationality</label>
                            <input type="text" class="form-control bg-secondary focus-ring focus-ring-light text-light border-0" id="nationalityInput" name="nationality" required>
                        </div>
                        <div class="col-md-2 col-6">
                            <label for="firstName" class="lead text-warning">Civil Status</label>
                            <select class="form-select bg-secondary focus-ring focus-ring-light text-light border-0" id="civilStatusInput" name="civilStatus" required>
                                <option selected></option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="widow">Widow</option>
                                <option value="separated">Separated</option>
                            </select>
                        </div>
                        <div class="col-md-2 col-6 ms-auto">
                            <label for="lastName" class="lead text-warning">Gender</label>
                            <select class="form-select bg-secondary focus-ring focus-ring-light text-light border-0" id="genderInput" required>
                                <option selected></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Prefer not to say</option>
                            </select>
                        </div>

                        <h1 class="lead display-4 mt-5 mb-3 w-100 text-light" style="border-bottom:1px solid orange">Contact Information</h1>

                        <div class="row g-3">
                            <div class="col-md-4 col-9">
                                <label for="lastName" class="lead text-warning">Email</label>
                                <input type="text" class="form-control bg-secondary focus-ring focus-ring-light text-light border-0" id="emailInput" name="email" required>
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="lastName" class="lead text-warning">Phone Number</label>
                                <input type="text" class="form-control bg-secondary focus-ring focus-ring-light text-light border-0" id="phoneNumberInput" name="phoneNumber" required>
                            </div>
                            <div class="col-md-4">
                                <label for="lastName" class="lead text-warning">Complete Address</label>
                                <input type="text" class="form-control bg-secondary focus-ring focus-ring-light text-light border-0" id="addressInput" name="address" required>
                            </div>

                            <div class="col-md-4 col-6">
                                <label for="lastName" class="lead text-warning">City</label>
                                <input type="text" class="form-control bg-secondary focus-ring focus-ring-light text-light border-0" id="cityInput" name="city" required>
                            </div>
                            <div class="col-md-4 col-6">
                                <label for="lastName" class="lead text-warning">Province</label>
                                <input type="text" class="form-control bg-secondary focus-ring focus-ring-light text-light border-0" id="provinceInput" name="province" required>
                            </div>
                            <div class="col-md-1 col-3 mx-md-auto">
                                <label for="lastName" class="lead text-warning">Zip Code</label>
                                <input type="text" class="form-control bg-secondary focus-ring focus-ring-light text-light border-0" id="zipcodeInput" name="zipCode" required>
                            </div>
                        </div>

                        <h1 class="lead display-4 mt-5 mb-3 w-100 text-light" style="border-bottom:1px solid orange">Academic Information</h1>

                        <div class="row g-3 d-flex">
                            <div class="col-md-3 col-6">
                                <label for="lastName" class="lead text-warning">Program</label>
                                <select class="form-select bg-secondary focus-ring focus-ring-light text-light border-0" name="program" id="programInput" required>
                                    <option selected></option>
                                    <option value="education">Education</option>
                                    <option value="accounting">Accounting</option>
                                    <option value="computer_science">Computer Science</option>
                                    <option value="business_management">Business Management</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-6">
                                <label for="lastName" class="lead text-warning">Year Level</label>
                                <select class="form-select bg-secondary focus-ring focus-ring-light text-light border-0" name="yearLevel" id="yearLevelInput" required>
                                    <option selected></option>
                                    <option value="1stYear">1st Year</option>
                                    <option value="2ndYear">2nd Year</option>
                                    <option value="3rdYear">3rd Year</option>
                                    <option value="4thYear">4th Year</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-6">
                                <label for="lastName" class="lead text-warning">Student Type</label>
                                <select class="form-select bg-secondary focus-ring focus-ring-light text-light border-0" name="Gender" id="genderInput" required>
                                    <option selected></option>
                                    <option value="newStudent">New Student</option>
                                    <option value="returnee">Returnee</option>
                                    <option value="transferee">Transferee</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-6">
                                <label for="lastName" class="lead text-warning">Enrollment Type</label>
                                <select class="form-select bg-secondary focus-ring focus-ring-light text-light border-0" id="genderInput" required>
                                    <option selected></option>
                                    <option value="regular">Regular</option>
                                    <option value="irregular">Irregular</option>
                                </select>
                            </div>
                        </div>
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

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const spinner = document.querySelector('.spinner-wrapper');

    window.addEventListener('load', () => { // add loader animation while the page is loading
        setTimeout(() => {
            spinner.style.display = 'none';
        }, 1000);
    });
</script>

</html>