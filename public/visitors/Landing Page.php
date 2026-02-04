<?php
$pageTitle = 'Home - Tomas Del Rosario College';
include __DIR__ . '/../../includes/header.php';
?>

<!-- HERO SECTION -->
<section class="bg-light text-success py-5 p-lg-3 mt-5">
    <div class="container">
        <div class="d-flex align-items-center justify-content-center">

            <div class=" col-6 text-sm-start text-center">
                <h1 class="display-5 lead">
                    Enroll now at <span class="text-success fw-bold">TRC<span class="display-5 lead">!</span></span>
                </h1>
                <p class="lead my-3 text-dark">
                    Join a world-class university dedicated to academic excellence and innovation.
                </p>
                <button class="btn btn-success btn-lg" type="button"
                    onclick="window.location.href='/Modern Student Portal/public/visitors/Registration Page.php'">Register Now</button>
            </div>

            <div class="col-sm-6 d-none d-sm-block">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/Modern Student Portal/src/img/nursing station.jpg" class="d-block w-100"
                                alt="image of nursing station">
                        </div>
                        <div class="carousel-item">
                            <img src="/Modern Student Portal/src/img/college computer room.jpg" class="d-block w-100"
                                alt="image of college computer room">
                        </div>
                        <div class="carousel-item">
                            <img src="/Modern Student Portal/src/img/computer science lab room.jpg" class="d-block w-100"
                                alt="image of student computer science lab room">
                        </div>
                        <div class="carousel-item">
                            <img src="/Modern Student Portal/src/img/library.jpg" class="d-block img-fluid"
                                alt="image of library" style="width: 100%;">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- NEWS LETTER SECTION -->
<section class="bg-success text-dark p-3">
    <div class="container">
        <div class="d-md-flex justify-between-center align-items-center justify-content-between">
            <h4 class="mb-3 mb-md-0 lead display-6 text-light">Subscribe to our Newsletter</h4>

            <form class="input-group news-input">
                <input type="text" class="form-control" placeholder="Enter your Email" name="email" required autocomplete="on">
                <button class="btn btn-lg bg-dark text-light" type="submit">Submit</button>
            </form>

        </div>
    </div>
</section>

<!-- CARDS SECTION -->
<section class="bg-light py-5">

    <h1 class="d-flex align-items-center justify-content-center bg-light text-dark my-4 lead display-5">What we<span
            class="text-success ms-2 lead display-5">Offer</span>
    </h1>

    <div class="container d-flex flex-column flex-md-row justify-content-center align-items-center gap-4">

        <div class="card bg-light" style="width: 18rem;">
            <img src="/Modern Student Portal/src/img/BEED.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title text-success lead display-6">BEED</h4>
                <p class="card-text text-dark">Access comprehensive learning resources, courses, and academic
                    materials designed to support your educational journey.</p>
            </div>
        </div>

        <div class="card bg-light" style="width: 18rem">
            <img src="/Modern Student Portal/src/img/Accountancy.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title text-success lead display-6">BSA</h4>
                <p class="card-text text-dark">Master financial management and accounting principles through expert
                    instruction and practical applications.</p>
            </div>
        </div>

        <div class="card bg-light" style="width: 18rem;">
            <img src="/Modern Student Portal/src/img/BSCS.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title text-success lead display-6">BSCS</h4>
                <p class="card-text text-dark">Learn coding and software development skills with hands-on projects
                    and industry-standard technologies.</p>
            </div>
        </div>

        <div class="card bg-light" style="width: 18rem;">
            <img src="/Modern Student Portal/src/img/BA.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title text-success lead display-6">BSBA</h4>
                <p class="card-text text-dark">Business Course Description.Business Course Description.Business
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