<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laragon College University</title>
    <link rel="icon" type="image/png" href="../src/img/YellowElephant.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container my-1">
            <a href="#" class="navbar-brand fw-bold d-flex align-items-center">
                <span class="px-2"><img src="../src/img/YellowElephant.png" alt="yellow elephant logo" style="width: 50px; border-radius: 100px;"></span>
                <span class="d-none d-sm-block"><span class="text-warning">Laragon</span> University</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Admission</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Events</a></li>
                    <li class="nav-item"><button class="btn btn-warning btn-md bg-dark text-warning">Login</button></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="bg-dark text-light py-5 mt-5">
        <div class="container">
            <div class="d-flex align-items-center justify-content-center">

                <div class=" col-6 text-sm-start text-center">
                    <h1 class="display-5 fw-bold">
                        Enroll at <span class="text-warning">Laragon</span>
                    </h1>
                    <p class="lead my-3">
                        Join a world-class university dedicated to academic excellence and innovation.
                    </p>
                    <button class="btn btn-warning btn-lg" onclick="window.location.href='registrationPage.php'">Enroll Now</button>
                </div>
                <div class="col-sm-6 d-none d-sm-block">
                    <img src="../src/img/school.jpg"
                        class="img-fluid rounded shadow"
                        alt="Laragon University Campus Image">
                </div>

            </div>
        </div>
    </section>

    <!-- NEWS LETTER SECTION -->
    <section class="bg-warning text-dark p-3">
        <div class="container d-sm-flex flex-sm-row justify-content-between align-items-center">
            <h4 class="mb-3 mb-sm-0">Subscribe to our Newsletter</h4>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="email" placeholder="Enter your email" aria-label="Search">
                <button class="btn btn-dark" type="submit">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- CARDS SECTION -->
    <section class="bg-dark py-5">

        <h1 class="d-flex align-items-center justify-content-center bg-dark text-light mb-4">Our Courses</h1>

        <div class="container d-flex flex-column flex-sm-row justify-content-center align-items-center gap-4">

            <div class="card bg-dark" style="width: 18rem; border: 1px solid #444;">
                <img src="../src/img/Group Learn.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-light" style="text-decoration: underline; text-underline-offset: 4px; text-decoration-thickness:1px;">Education</h4>
                    <p class="card-text text-light">Access comprehensive learning resources, courses, and academic materials designed to support your educational journey.</p>
                    <a href="#" class="btn btn-warning">Go somewhere</a>
                </div>
            </div>

            <div class="card bg-dark" style="width: 18rem; border: 1px solid #444;">
                <img src="../src/img/Accounting+Clerk-3915942594.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-light" style="text-decoration: underline; text-underline-offset: 4px; text-decoration-thickness:1px">Accounting</h4>
                    <p class="card-text text-light">Master financial management and accounting principles through expert instruction and practical applications.</p>
                    <a href="#" class="btn btn-warning">Go somewhere</a>
                </div>
            </div>

            <div class="card bg-dark" style="width: 18rem; border: 1px solid #444;">
                <img src="../src/img/Student-Programming.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-light" style="text-decoration: underline; text-underline-offset: 4px; text-decoration-thickness:1px">Computer Science</h4>
                    <p class="card-text text-light">Learn coding and software development skills with hands-on projects and industry-standard technologies.</p>
                    <a href="#" class="btn btn-warning">Go somewhere</a>
                </div>
            </div>

            <div class="card bg-dark" style="width: 18rem; border: 1px solid #444;">
                <img src="../src/img/YellowElephant.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-light" style="text-decoration: underline; text-underline-offset: 4px; text-decoration-thickness:1px">Empty Card</h4>
                    <p class="card-text text-light">Business Course Description.Business Course Description.Business Course Description.</p>
                    <a href="#" class="btn btn-warning">Go somewhere</a>
                </div>
            </div>

        </div>

    </section>

    <footer>
        <div class="bg-dark text-light text-center p-3">
            <p class="mb-0">&copy; 2024 Laragon College University. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>