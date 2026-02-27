<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Content & Posts - Tomas Del Rosario College</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/Modern Student Portal/src/img/TRC_LOGO.png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="./../components/sidebar.css">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .post-image {
            height: 200px;
            object-fit: cover;
        }

        .stat-box {
            font-size: 0.85rem;
        }
    </style>
</head>

<body>

    <?php include __DIR__ . '/../components/editBroadcastModal.php'; ?> <!--EDIT BROADCAST MODAL-->
    <?php include __DIR__ . '/../components/createBroadcastModal.php';  ?> <!--CREATE BROADCAST MODAL-->
    <?php include __DIR__ . '/../components/createPostModal.php';  ?> <!--CREATE POST MODAL-->

    <div class="wrapper">

        <?php include __DIR__ . '/../components/sidebar.php'; ?> <!--SIDEBAR-->

        <div class="main ms-5 ps-4">

            <nav class="navbar navbar-expand-lg bg-light border border-bottom">
                <div class="container-fluid justify-content-center" style="transform: translate(0px, 10px);">
                    <p class="text-success lead">Content and Posts</p>
                </div>

                <div class="pe-2">

                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-plus-lg me-1"></i> Create
                        </button>

                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <button class="btn dropdown-item"
                                    data-bs-toggle="modal"
                                    data-bs-target="#createBroadcastModal">
                                    <i class="bi bi-file-earmark-plus me-2"></i>
                                    Create Broadcast
                                </button>
                            </li>

                            <li>
                                <button class="btn dropdown-item"
                                    data-bs-toggle="modal"
                                    data-bs-target="#createPostModal">
                                    <i class="bi bi-megaphone me-2"></i>
                                    Create Post
                                </button>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-folder-plus me-2"></i>
                                    Create Category
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>

            <div class="p-3">

                <ul class="nav nav-tabs mb-4"> <!--TAB LIST-->
                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#broadcastTab">
                            Broadcasts
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#postsTab">
                            Posts
                        </button>
                    </li>
                </ul>

                <div class="tab-content"> <!--TAB CONTENTS-->

                    <div class="tab-pane fade show active" id="broadcastTab">

                        <!-- ================= BROADCAST LIST ================= -->
                        <div class="card shadow-sm">
                            <div class="card-body">

                                <div class="d-flex justify-content-between mb-3">
                                    <h6 class="mb-0">All Broadcasts</h6>
                                    <select class="form-select form-select-sm w-auto">
                                        <option>All</option>
                                        <option>Published</option>
                                        <option>Draft</option>
                                        <option>Archived</option>
                                    </select>
                                </div>

                                <div class="list-group">

                                    <div class="card border mb-2">
                                        <div class="card-body d-flex justify-content-between align-items-start">

                                            <!-- LEFT CONTENT -->
                                            <div class="d-flex">

                                                <!-- Color Indicator -->
                                                <div class="me-3">
                                                    <div class="rounded-circle bg-success" style="width: 12px; height: 12px;"></div>
                                                </div>

                                                <div>
                                                    <h6 class="fw-bold mb-1">
                                                        📢 Enrollment is Now Open!
                                                    </h6>

                                                    <p class="mb-2 text-muted small">
                                                        We are excited to announce that enrollment for the upcoming semester is officially open.
                                                        Please complete your registration before the deadline.
                                                    </p>

                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="badge bg-success">Published</span>
                                                        <small class="text-muted">Expires: March 30, 2026</small>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- RIGHT ACTIONS -->
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn text-primary" data-bs-toggle="modal" data-bs-target="#editBroadcastModal">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="btn text-warning" data-bs-toggle="modal" data-bs-target="#archiveBroadcastModal">
                                                    <i class="bi bi-archive"></i>
                                                </button>
                                                <button class="btn text-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="card border mb-2">
                                        <div class="card-body d-flex justify-content-between align-items-start">

                                            <!-- LEFT CONTENT -->
                                            <div class="d-flex">

                                                <!-- Color Indicator -->
                                                <div class="me-3">
                                                    <div class="rounded-circle bg-success" style="width: 12px; height: 12px;"></div>
                                                </div>

                                                <div>
                                                    <h6 class="fw-bold mb-1">
                                                        📢 Tomas Del Rosario - Intramurals 2026
                                                    </h6>

                                                    <p class="mb-2 text-muted small">
                                                        We are excited to announce that enrollment for the upcoming semester is officially open.
                                                        Please complete your registration before the deadline.
                                                    </p>

                                                    <div class="d-flex align-items-center gap-2">
                                                        <span class="badge bg-success">Published</span>
                                                        <small class="text-muted">Expires: March 30, 2026</small>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- RIGHT ACTIONS -->
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn text-primary" data-bs-toggle="modal" data-bs-target="#editBroadcastModal">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="btn text-warning" data-bs-toggle="modal" data-bs-target="#archiveBroadcastModal">
                                                    <i class="bi bi-archive"></i>
                                                </button>
                                                <button class="btn text-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>

                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- ================= POSTS ================= -->
                    <div class="tab-pane fade" id="postsTab">
                        <div class="row g-4">

                            <!-- POST CARD -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card border shadow-sm h-100 content-card">

                                    <div class="card-body">

                                        <!-- HEADER -->
                                        <div class="d-flex align-items-center mb-2">
                                            <div>
                                                <h6 class="mb-0 fw-semibold">Foundation Day Celebration</h6>
                                                <small class="text-muted">
                                                    By Admin • Feb 18, 2026
                                                </small>
                                            </div>
                                            <span class="badge bg-success ms-auto">Published</span>
                                        </div>

                                        <!-- IMAGE -->
                                        <img src="./../../../src/img/Accountancy.jpg"
                                            class="card-img-top object-fit-cover rounded mb-2"
                                            style="height:400px;">

                                        <!-- CAPTION -->
                                        <p class="text-muted small mb-2">
                                            The School Foundation Day celebration will be held on March 15.
                                            All students are encouraged to participate.
                                        </p>

                                        <!-- STATS -->
                                        <div class="d-flex justify-content-between border-top pt-2 text-muted small">
                                            <span><i class="bi bi-eye me-1"></i>120</span>
                                            <span><i class="bi bi-chat me-1"></i>15</span>
                                        </div>

                                    </div>

                                    <!-- FOOTER ACTIONS -->
                                    <div class="card-footer bg-white border-0 pt-0 pb-3">
                                        <div class="d-flex justify-content-between">

                                            <div class="btn-group btn-group-sm">
                                                <button class="btn text-primary">
                                                    <i class="bi bi-pencil h6"></i>
                                                </button>
                                                <button class="btn text-secondary">
                                                    <i class="bi bi-eye h6"></i>
                                                </button>
                                                <button class="btn text-warning">
                                                    <i class="bi bi-archive h6"></i>
                                                </button>
                                                <button class="btn text-danger">
                                                    <i class="bi bi-trash h6"></i>
                                                </button>
                                            </div>

                                            <button class="btn text-secondary">
                                                <i class="bi bi-chat me-1"></i>
                                            </button>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- POST CARD -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./../scripts/sidebar.js"></script>

</body>

</html>