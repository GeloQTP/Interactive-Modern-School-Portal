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

        .content-card:hover {
            transform: translateY(-3px);
            transition: 0.2s ease;
        }

        .carousel-item {
            min-height: 160px;
            display: flex;
            align-items: center;
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

                <ul class="nav nav-tabs mb-4">
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

                <div class="tab-content">

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

                                    <div class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <strong>Enrollment is Now Open!</strong><br>
                                            <span class="badge bg-success">Published</span>
                                            <small class="text-muted ms-2">340 views</small>
                                        </div>

                                        <div class="btn-group btn-group-sm">
                                            <button class="btn text-primary" data-bs-toggle="modal" data-bs-target="#editBroadcastModal"><i class="bi bi-pencil h6"></i></button>
                                            <button class="btn text-warning" data-bs-toggle="modal" data-bs-target="#archiveBroadcastModal"><i class="bi bi-archive h6"></i></button>
                                            <button class="btn text-danger"><i class="bi bi-trash h6"></i></button>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- ================= POSTS ================= -->
                    <div class="tab-pane fade" id="postsTab">
                        <div class="row g-4">

                            <!-- Post Card -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card shadow-sm h-100 content-card">

                                    <div class="card-body">

                                        <div>
                                            <div class="d-flex">
                                                <strong>Admin</strong>
                                                <span class="badge bg-success ms-auto">Published</span><br>
                                            </div>
                                            <div>
                                                <small class="text-muted">Feb 18, 2026</small>
                                            </div>
                                        </div>

                                        <p class="mt-2">
                                            The School Foundation Day celebration will be held on March 15.
                                            All students are encouraged to participate.
                                        </p>

                                        <img src="https://via.placeholder.com/400x200"
                                            class="img-fluid rounded post-image mb-3">

                                        <div class="d-flex justify-content-between text-muted stat-box">
                                            <span><i class="bi bi-eye"></i> 120 Views</span>
                                            <span><i class="bi bi-chat"></i> 15 Comments</span>
                                        </div>

                                    </div>

                                    <div class="card-footer bg-white d-flex justify-content-between">
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-outline-primary"><i class="bi bi-pencil"></i></button>
                                            <button class="btn btn-outline-secondary"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
                                        </div>

                                        <button class="btn btn-outline-warning btn-sm">
                                            <i class="bi bi-archive"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>

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