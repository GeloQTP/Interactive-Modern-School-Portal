<div class="tab-pane fade show active" id="broadcastTab">

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
                                <div class="rounded-circle bg-secondary" style="width: 12px; height: 12px;"></div>
                            </div>

                            <div>
                                <h6 class="fw-bold mb-1">
                                    📢 Enrollment is Now Open!
                                    <small class="text-muted ms-4">February 27, 2026</small>
                                </h6>

                                <p class="my-2 text-muted small">
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
                                <i class="bi bi-pencil h5"></i>
                            </button>
                            <button class="btn text-warning" data-bs-toggle="modal" data-bs-target="#archiveBroadcastModal">
                                <i class="bi bi-archive h5"></i>
                            </button>
                            <button class="btn text-danger">
                                <i class="bi bi-trash h5"></i>
                            </button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>