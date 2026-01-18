<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <header>
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
    </header>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</html>