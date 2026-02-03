<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Laragon College University</title>
    <link rel="icon" type="image/png" href="./../../src/img/YellowElephant.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/../Modern Student Portal/styles/style.css">
</head>

<body>

    <!-- SPINNER -->
    <div class="spinner-wrapper">
        <div class="spinner-grow text-dark-emphasis" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

 <!-- NAVBAR -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container my-1">
                <a href="/Modern Student Portal/public/visitors/Landing Page.php" class="navbar-brand fw-bold d-flex align-items-center">
                    <span class="px-2">
                        <img src="/Modern Student Portal/src/img/YellowElephant.png" alt="Laragon logo" style="width: 50px; border-radius: 100px;">
                    </span>
                    <span class="d-none d-sm-block">
                        <span class="text-warning lead">Laragon</span> University
                    </span>
                </a>

                <button type="button" class="btn btn-warning bg-dark text-warning ms-lg-3"
                            onclick="window.location.href='/Modern Student Portal/public/visitors/Registration Page.php'">
                            Register
             </button>

            </div>
        </nav>
    </header>

    <!-- ADD THIS: Container for dynamic content -->
    <main id="content" style="margin-top: 80px;">
        <!-- Your page-specific content will be loaded here -->
        <div class="container">
            <h1>Welcome to Login Page</h1>
            <!-- Landing page content goes here -->
        </div>
    </main>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const spinner = document.querySelector('.spinner-wrapper');

    window.addEventListener('load', () => {
        setTimeout(() => {
            spinner.style.display = 'none';
        }, 1000);
    });

</script>

</html>