<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Tomas Del Rosario College</title>
    <link rel="icon" type="image/png" href="/Modern Student Portal/src/img/TRC_LOGO.png">
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top">
            <div class="container my-1">
                <a href="/Modern Student Portal/public/visitors/Landing Page.php" class="navbar-brand fw-bold d-flex align-items-center">
                    <span class="px-2">
                        <img src="/Modern Student Portal/src/img/TRC_LOGO.png" alt="Laragon logo" style="width: 50px; border-radius: 100px;">
                    </span>
                    <span class="d-none d-sm-block">
                        <span class="text-success lead">Tomas Del Rosario</span><span class="text-success"> College</span>
                    </span>
                </a>

                <button type="button" class="btn btn-success bg-light text-success ms-lg-3"
                    onclick="window.location.href='/Modern Student Portal/public/visitors/Registration Page.php'">
                    Register
                </button>

            </div>
        </nav>
    </header>

    <main id="login_main" style="margin-top: 80px;">
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