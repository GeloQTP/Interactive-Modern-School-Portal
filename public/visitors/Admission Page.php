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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container my-1">
                <a href="Landing Page.php" class="navbar-brand fw-bold d-flex align-items-center">
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
                        <li class="nav-item"><a class="nav-link" href="About Page.php">About</a></li>
                        <li class="nav-item"><a class="nav-link border rounded" href="Admission Page.php">Admission</a></li>
                        <li class="nav-item"><a class="nav-link" href="Events Page.php">Events</a></li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-warning bg-dark text-warning ms-3"
                                onclick="window.location.href='loginPage.php'">
                                Login
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

</body>

<script>
    const spinner = document.querySelector('.spinner-wrapper');

    window.addEventListener('load', () => { // add loader animation while the page is loading
        setTimeout(() => {
            spinner.style.display = 'none';
        }, 1000);
    });
</script>

</html>