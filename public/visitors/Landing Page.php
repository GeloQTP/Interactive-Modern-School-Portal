<?php
$pageTitle = 'Home - Tomas Del Rosario College';
include __DIR__ . '/../../includes/header.php';
?>

<!-- HERO SECTION -->
<section class="bg-dark text-light py-5 p-lg-3 mt-5">
    <div class="container">
        <div class="d-flex align-items-center justify-content-center">

            <div class=" col-6 text-sm-start text-center">
                <h1 class="display-5 fw-bold">
                    Enroll at <span class="text-warning">TRC</span>
                </h1>
                <p class="lead my-3">
                    Join a world-class university dedicated to academic excellence and innovation.
                </p>
                <button class="btn btn-warning btn-lg" type="button"
                    onclick="window.location.href='/Modern Student Portal/public/visitors/Registration Page.php'">Register Now</button>
            </div>

            <div class="col-sm-6 d-none d-sm-block">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/Modern Student Portal/src/img/Accounting+Clerk-3915942594.jpg" class="d-block w-100"
                                alt="image of accounting clerk">
                        </div>
                        <div class="carousel-item">
                            <img src="/Modern Student Portal/src/img/Student-Programming.jpg" class="d-block w-100"
                                alt="image of student programming">
                        </div>
                        <div class="carousel-item">
                            <img src="/Modern Student Portal/src/img/Student-demonstrating.jpg" class="d-block w-100"
                                alt="image of student demonstrating something">
                        </div>
                        <div class="carousel-item">
                            <img src="/Modern Student Portal/src/img/school.jpg" class="d-block img-fluid"
                                alt="image of school building" style="width: 88.2%;">
                        </div>
                    </div>
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
                <input type="text" class="form-control" placeholder="Enter your Email" name="email" required autocomplete="on">
                <button class="btn btn-lg bg-dark text-light" type="submit">Submit</button>
            </form>

        </div>
    </div>
</section>

<!-- CARDS SECTION -->
<section class="bg-dark py-5">

    <h1 class="d-flex align-items-center justify-content-center bg-dark text-light my-4 lead display-5">Our<span
            class="text-warning ms-2 lead display-5">Programs</span>
    </h1>

    <div class="container d-flex flex-column flex-md-row justify-content-center align-items-center gap-4">

        <div class="card bg-dark" style="width: 18rem; border: 1px solid #444;">
            <img src="/Modern Student Portal/src/img/Group Learn.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title text-light"
                    style="text-decoration: underline; text-underline-offset: 4px; text-decoration-thickness:1px;">
                    Education</h4>
                <p class="card-text text-light">Access comprehensive learning resources, courses, and academic
                    materials designed to support your educational journey.</p>
            </div>
        </div>

        <div class="card bg-dark" style="width: 18rem; border: 1px solid #444;">
            <img src="/Modern Student Portal/src/img/Accounting+Clerk-3915942594.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title text-light"
                    style="text-decoration: underline; text-underline-offset: 4px; text-decoration-thickness:1px">
                    Accounting</h4>
                <p class="card-text text-light">Master financial management and accounting principles through expert
                    instruction and practical applications.</p>
            </div>
        </div>

        <div class="card bg-dark" style="width: 18rem; border: 1px solid #444;">
            <img src="/Modern Student Portal/src/img/Student-Programming.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title text-light"
                    style="text-decoration: underline; text-underline-offset: 4px; text-decoration-thickness:1px">
                    Computer Science</h4>
                <p class="card-text text-light">Learn coding and software development skills with hands-on projects
                    and industry-standard technologies.</p>
            </div>
        </div>

        <div class="card bg-dark" style="width: 18rem; border: 1px solid #444;">
            <img src="/Modern Student Portal/src/img/YellowElephant.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title text-light"
                    style="text-decoration: underline; text-underline-offset: 4px; text-decoration-thickness:1px">
                    Empty Card</h4>
                <p class="card-text text-light">Business Course Description.Business Course Description.Business
                    Course Description.</p>
            </div>
        </div>

    </div>

</section>

<footer>
    <div class="bg-dark text-light text-center p-3">
        <p class="mb-0">&copy; 2026 Laragon College University. All rights reserved.</p>
    </div>
</footer>

<script src="/Modern Student Portal/public/visitors/scripts/LandingPage.js"></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>