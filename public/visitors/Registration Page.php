<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - Tomas Del Rosario College</title>
    <link rel="icon" type="image/png" href="/Modern Student Portal/src/img/TRC_LOGO.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./../../styles/style.css
    ">
</head>

<body>

    <?php
    include __DIR__ . '/modules/Spinner&Toast.php'; // SPINNER AND TOAST NOTIFICATION
    ?>

    <header>
        <?php
        include __DIR__ . '/modules/NavigationBar.php'; // NAVIGATION BAR
        ?>
    </header>

    <main>
        <section class="bg-light py-5 p-lg-5 mt-5">
            <div class="container">

                <?php
                include __DIR__ . '/modules/RegistrationForm.php'; // REGISTRATION FORM
                ?>

                <?php
                include __DIR__ . '/modules/OTPModal.php'; // OTP MODAL
                ?>

            </div>
        </section>
    </main>

    <footer>
        <div class="bg-light text-dark text-center p-3">
            <p class="mb-0">&copy; 2026 Tomas Del Rosario College. All rights reserved.</p>
        </div>
    </footer>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="./scripts/RegistrationPage.js"></script>

</html>