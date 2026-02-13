    <div class="col-lg-8">
        <div class="card" style="height: 38.5vh;">

            <div class="d-flex align-items-center justify-content-between border-bottom">
                <p class="text-muted fw-bold" style="transform: translate(19px,8.5px);">Recent Activities</p>
                <i class="bi bi-activity h3 text-danger pe-3" style="transform: translate(0px, 5px);"></i>
            </div>

            <div class="card-body overflow-y-scroll">
                <!-- LOG -->
                <?php while ($row = $result->fetch_assoc()) {

                    $statusColor = 'secondary';

                    if ($row['current_status'] === 'pending') {
                        $statusColor = 'warning';
                    } elseif ($row['current_status'] === 'approved') {
                        $statusColor = 'success';
                    } elseif ($row['current_status'] === 'subscription') {
                        $statusColor = 'primary';
                    } elseif ($row['current_status'] === 'rejected') {
                        $statusColor = 'danger';
                    }

                ?>
                    <div class="activity-item mb-3 pb-3 border-start border-3">
                        <div class="d-flex justify-content-between align-items-start ps-3">
                            <div>
                                <p class="mb-1 fw-semibold"><?= $row['log_owner'] ?></p>
                                <p class="mb-1 text-muted small"><?= $row['log_description'] ?></p>
                                <small class="text-muted"><?= $row['log_date'] ?></small>
                            </div>
                            <span class="badge text-bg-<?= $statusColor ?> text-light"><?= $row['current_status'] ?></span>
                        </div>
                    </div>
                <?php  } ?>
                <!-- LOG -->
            </div>

            <div class="ms-auto pe-3" style="transform: translate(0px, 10px)">
                <ul class="pagination pagination-sm">

                    <?php if (isset($_GET['page-nr']) && $_GET['page-nr'] > 1) { ?>

                        <li class="page-item">
                            <a class="page-link" href="?page-nr=<?= $_GET['page-nr'] - 1 ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo; Previous</span>
                            </a>
                        </li>

                    <?php } else { ?>

                        <li class="page-item">
                            <a class="page-link disabled" href="" aria-label="Previous">
                                <span aria-hidden="true">&laquo; Previous</span>
                            </a>
                        </li>

                    <?php } ?>


                    <?php if (!isset($_GET['page-nr'])) { ?>

                        <li class="page-item">
                            <a class="page-link" href="?page-nr=2" aria-label="Next">
                                <span aria-hidden="true">Next &raquo;</span>
                            </a>
                        </li>

                    <?php } else { ?>

                        <?php if ($_GET['page-nr'] >= $pages) { ?>

                            <li class="page-item">
                                <a class="page-link disabled" href="" aria-label="Next">
                                    <span aria-hidden="true">Next &raquo;</span>
                                </a>
                            </li>

                        <?php } else { ?>

                            <li class="page-item">
                                <a class="page-link" href="?page-nr=<?= $_GET['page-nr'] + 1 ?>" aria-label="Next">
                                    <span aria-hidden="true">Next &raquo;</span>
                                </a>
                            </li>

                        <?php } ?>

                    <?php } ?>

                </ul>
            </div>

        </div>
    </div>