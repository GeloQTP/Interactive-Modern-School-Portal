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

    <main id="login_main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="bg-light p-4 p-md-5 rounded-3 shadow-sm">

                        <h2 class="text-center lead display-6 mb-5">Login</h2>

                        <form>

                            <!-- Email -->
                            <div class="form-floating mb-3">
                                <input
                                    type="email"
                                    class="form-control"
                                    id="loginEmail"
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
                                    id="loginPassword"
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
</script>

</html>