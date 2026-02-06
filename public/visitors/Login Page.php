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

<style>
    body {
        overflow: hidden;

    }

    #login_main {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100vw;
        height: 100vh;
    }
</style>

<body>

    <!-- SPINNER -->
    <div class="spinner-wrapper">
        <div class="spinner-grow text-dark-emphasis" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <!-- TOASTS SECTION -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast bg-light text-dark" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="/Modern Student Portal/src/img/TRC_LOGO.png" style="width: 30px;" class="rounded me-2 img-fluid"
                    alt="...">
                <strong class="me-auto">TRC Notification</strong>
                <small>just now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">

            </div>
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

                <!-- <button type="button" class="btn btn-success bg-light text-success ms-lg-3"
                    onclick="window.location.href='/Modern Student Portal/public/visitors/Registration Page.php'">
                    Register
                </button> -->

            </div>
        </nav>
    </header>

    <main id="login_main" class="mt-5"> <!--ADD BACKGROUND IMAGE-->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="bg-light p-4 p-md-5 rounded-3 shadow-sm">

                        <h2 class="text-center lead display-6 mb-5">LOGIN</h2>

                        <form id="loginForm">

                            <!-- Email -->
                            <div class="form-floating mb-3">
                                <input
                                    type="email"
                                    class="form-control form-control-sm"
                                    name="email"
                                    placeholder="name@example.com"
                                    required>
                                <label for="loginEmail">
                                    <i class="bi bi-envelope me-1"></i>Email address
                                </label>
                            </div>

                            <!-- Password -->
                            <div class="form-floating mb-3">
                                <input
                                    type="password"
                                    class="form-control"
                                    name="password"
                                    placeholder="Password"
                                    required>
                                <label for="loginPassword">
                                    <i class="bi bi-lock me-1"></i>Password
                                </label>
                            </div>

                            <!-- Remember & Forgot -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">
                                        Remember me
                                    </label>
                                </div>
                                <a href="#" class="text-decoration-none small text-success">
                                    Forgot password?
                                </a>
                            </div>

                            <!-- Button -->
                            <button
                                type="submit"
                                class="btn btn-success w-100 py-2 fw-semibold">
                                Login
                            </button>

                        </form>

                        <!-- Divider -->
                        <hr class="my-4">

                        <!-- Register -->
                        <p class="text-center small mb-0 text-secondary">
                            Don&#39;t have an account?
                            <a href="/Modern Student Portal/public/visitors/Registration Page.php" class="text-decoration-none fw-semibold text-success">
                                Register here
                            </a>
                        </p>

                    </div>
                </div>
            </div>
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

    window.addEventListener('DOMContentLoaded', () => {
        const loginForm = document.getElementById("loginForm");

        loginForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            try {
                const res = await fetch(`../ajax/login.php`, {
                    method: 'POST',
                    body: new FormData(loginForm),
                    credentials: 'same-origin',
                });

                if (!res.ok) {
                    document.querySelector(".toast-body").textContent =
                        "Network Response Error, Please Try again.";
                    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(
                        document.getElementById("liveToast"),
                    );
                    toastBootstrap.show();
                }

                const response = await res.json();

                if (response.success) {
                    document.querySelector(".toast-body").textContent = response.message;
                    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(
                        document.getElementById("liveToast"),
                    );
                    toastBootstrap.show();
                } else {
                    document.querySelector(".toast-body").textContent =
                        "Something went wrong. Please try again.";
                    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(
                        document.getElementById("liveToast"),
                    );
                    toastBootstrap.show();
                }

            } catch (error) {
                document.querySelector(".toast-body").textContent =
                    "Something went wrong. Please try again.";
                const toastBootstrap = bootstrap.Toast.getOrCreateInstance(
                    document.getElementById("liveToast"),
                );
                toastBootstrap.show();
            } finally {

            }

        });

    });
</script>

</html>