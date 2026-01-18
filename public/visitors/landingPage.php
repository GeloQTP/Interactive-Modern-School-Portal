<?php
session_start();
include(__DIR__ . '/../../includes/db_connect.php'); // include the database connection file
mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ALL);

$status = $_SESSION['status'] ?? '';
$_SESSION['status'] = ''; // Clear status message after displaying

?>

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

    <!-- TOASTS SECTION -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast bg-dark text-light" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="../../src/img/YellowElephant.png" style="width: 30px;" class="rounded me-2 img-fluid" alt="...">
                <strong class="me-auto">Laragon Notification</strong>
                <small>just now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <?= $status ?>
            </div>
        </div>
    </div>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container my-1">
            <a href="landingPage.php" class="navbar-brand fw-bold d-flex align-items-center">
                <span class="px-2"><img src="./../../src/img/YellowElephant.png" alt="yellow elephant logo" style="width: 50px; border-radius: 100px;"></span>
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
                    <li class="nav-item"><button class="btn btn-warning bg-dark text-warning" onclick="window.location.href='loginPage.php'">Login</button></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="bg-dark text-light py-5 p-lg-3 mt-5">
        <div class="container">
            <div class="d-flex align-items-center justify-content-center">

                <div class=" col-6 text-sm-start text-center">
                    <h1 class="display-5 fw-bold">
                        Enroll at <span class="text-warning">Laragon</span>
                    </h1>
                    <p class="lead my-3">
                        Join a world-class university dedicated to academic excellence and innovation.
                    </p>
                    <button class="btn btn-warning btn-lg" type="button" onclick="window.location.href='registrationPage.php'">Register Now</button>
                </div>
                <div class="col-sm-6 d-none d-sm-block">
                    <!-- <img src="./../../src/img/school.jpg"
                        class="img-fluid rounded shadow"
                        alt="Laragon University Campus Image"> -->
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../../src/img/Accounting+Clerk-3915942594.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../../src/img/Student-Programming.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="../../src/img/Student-demonstrating.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- NEWS LETTER SECTION -->
    <section class="bg-warning text-dark p-3">
        <div class="container">
            <div class="d-md-flex justify-between-center align-items-center justify-content-between">
                <h4 class="mb-3 mb-md-0">Subscribe to our Newsletter</h4>

                <form class="input-group news-input">
                    <input type="text" class="form-control" placeholder="Enter your Email" name="email" required>
                    <button class="btn btn-lg bg-dark text-light" type="submit">Submit</button>
                </form>

            </div>
        </div>
    </section>

    <!-- CARDS SECTION -->
    <section class="bg-dark py-5">

        <h1 class="d-flex align-items-center justify-content-center bg-dark text-light mb-4">Our<span class="text-warning ms-2">Programs</span>
        </h1>

        <div class="container d-flex flex-column flex-md-row justify-content-center align-items-center gap-4">

            <div class="card bg-dark" style="width: 18rem; border: 1px solid #444;">
                <img src="./../../src/img/Group Learn.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-light" style="text-decoration: underline; text-underline-offset: 4px; text-decoration-thickness:1px;">Education</h4>
                    <p class="card-text text-light">Access comprehensive learning resources, courses, and academic materials designed to support your educational journey.</p>
                    <a href="#" class="btn btn-warning">Go somewhere</a>
                </div>
            </div>

            <div class="card bg-dark" style="width: 18rem; border: 1px solid #444;">
                <img src="./../../src/img/Accounting+Clerk-3915942594.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-light" style="text-decoration: underline; text-underline-offset: 4px; text-decoration-thickness:1px">Accounting</h4>
                    <p class="card-text text-light">Master financial management and accounting principles through expert instruction and practical applications.</p>
                    <a href="#" class="btn btn-warning">Go somewhere</a>
                </div>
            </div>

            <div class="card bg-dark" style="width: 18rem; border: 1px solid #444;">
                <img src="./../../src/img/Student-Programming.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-light" style="text-decoration: underline; text-underline-offset: 4px; text-decoration-thickness:1px">Computer Science</h4>
                    <p class="card-text text-light">Learn coding and software development skills with hands-on projects and industry-standard technologies.</p>
                    <a href="#" class="btn btn-warning">Go somewhere</a>
                </div>
            </div>

            <div class="card bg-dark" style="width: 18rem; border: 1px solid #444;">
                <img src="./../../src/img/YellowElephant.png" class="card-img-top" alt="...">
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


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", () => {

        const form = document.querySelector(".news-input");
        const emailInput = document.querySelector(".news-input input");
        const submitBtn = document.querySelector(".news-input button");
        const toastLiveExample = document.getElementById('liveToast');

        form.addEventListener('submit', async (e) => {
            e.preventDefault();

            const email = emailInput.value.trim();
            const formData = new FormData(form);

            submitBtn.disabled = true;
            submitBtn.textContent = 'Please Wait...';

            try {
                const response = await fetch('emailSubmit.php', {
                    method: 'POST',
                    body: formData,
                    credentials: 'same-origin'
                });

                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }

                const result = await response.json();

                document.querySelector('.toast-body').textContent = result.message;
                const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                toastBootstrap.show()


            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');

            } finally {
                submitBtn.disabled = false;
                submitBtn.textContent = 'Submit';
            }
        });
    });
</script>

</html>