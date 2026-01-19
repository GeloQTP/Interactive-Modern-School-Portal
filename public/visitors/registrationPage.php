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
                <a href="landingPage.html" class="navbar-brand fw-bold d-flex align-items-center">
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

    <section class="bg-dark text-light py-5 p-lg-5 mt-5">
        <div class="container">

            <form action="" class="input-group d-flex align-items-center justify-content-center">

                <h1 class="lead display-4 mb-5 w-100 text-light" style="border-bottom:1px solid orange">Personal Information</h1>

                <div class="row g-4">
                    <div class="col-md-4">
                        <label for="firstName" class="lead text-warning">First Name</label>
                        <input type="text" class="form-control bg-secondary focus-ring focus-ring-light text-light border-0" aria-label="First name" id="firstName" name="firstName" required>
                    </div>
                    <div class="col-md-4">
                        <label for="lastName" class="lead text-warning">Last Name</label>
                        <input type="text" class="form-control bg-secondary focus-ring focus-ring-light text-light border-0" aria-label="Last name" id="lastName" name="lastName" required>
                    </div>
                    <div class="col-md-2">
                        <label for="lastName" class="lead text-warning">Middle Name</label>
                        <input type="text" class="form-control bg-secondary focus-ring focus-ring-light text-light border-0" aria-label="Middle name" id="middleName" name="middleName" required>
                    </div>
                    <div class="col-md-1 mx-auto">
                        <label for="lastName" class="lead text-warning">Ex.</label>
                        <input type="text" class="form-control bg-secondary focus-ring focus-ring-light text-light border-0" aria-label="Middle name" id="middleName" placeholder="e.g Jr" name="middleName" required>
                    </div>

                    <div class="col-md-4">
                        <label for="birthdate" class="lead text-warning">Date of Birth</label>
                        <input type="date" class="form-control bg-secondary focus-ring focus-ring-light text-light border-0 text-light" id="birthdate" name="birthdate" required>
                    </div>
                    <div class="col-md-1 col-3 me-md-auto">
                        <label for="lastName" class="lead text-warning">Age</label>
                        <input class="form-control bg-secondary border-0 text-light" type="text" aria-label="Disabled input example" disabled readonly>
                    </div>
                    <div class="col-md-2 ms-auto">
                        <label for="lastName" class="lead text-warning">Gender</label>
                        <select class="form-select bg-secondary focus-ring focus-ring-light text-light border-0" aria-label="Default select example">
                            <option selected></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Prefer not to say</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="lastName" class="lead text-warning">Address</label>
                        <input type="text" class="form-control bg-secondary focus-ring focus-ring-light text-light border-0" aria-label="Address" id="address" name="address" required>
                    </div>
                    <div class="col-md-2 col-6 mx-md-auto">
                        <label for="firstName" class="lead text-warning">Nationality</label>
                        <input type="text" class="form-control bg-secondary focus-ring focus-ring-light text-light border-0" aria-label="First name" id="firstName" name="firstName" required>
                    </div>
                    <div class="col-md-2 col-6">
                        <label for="firstName" class="lead text-warning">Civil Status</label>
                        <select class="form-select bg-secondary focus-ring focus-ring-light text-light border-0" aria-label="Default select example">
                            <option selected></option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="widow">Widow</option>
                            <option value="separated">Separated</option>
                        </select>
                    </div>
            </form>

        </div>
    </section>

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