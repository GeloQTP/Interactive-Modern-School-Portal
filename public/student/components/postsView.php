 <?php

    try {
        $status = 'Published';
        $stmt = $conn->prepare("SELECT * FROM posts WHERE status = ?");
        $stmt->bind_param("s", $status);
        $stmt->execute();
    } catch (Exception $e) {
    }
    $result = $stmt->get_result();

    ?>

 <?php while ($row = $result->fetch_assoc()) { ?>
     <div class="card border shadow-sm content-card mx-auto mb-5" id="posts_wrapper">

         <div class="card-body">

             <!-- HEADER -->
             <div class="d-flex align-items-center mb-2">
                 <div>
                     <h6 class="mb-0 fw-semibold"><?= $row['post_title'] ?></h6>
                     <small class="text-muted">
                         By <?= $row['posted_by'] ?> • <?= $row['post_date'] ?>
                         <span class="ms-3"><i class="bi bi-heart me-1"></i>1.2k </span>
                     </small>
                 </div>
             </div>

             <!-- IMAGE -->
             <img src="<?= $row['image_src'] ?>"
                 class="card-img-top object-fit-cover rounded mb-2"
                 style="height:400px;">

             <!-- CAPTION -->
             <p class="text-muted small mb-1" style="overflow-y:auto; max-height:60.5px;">
                 <?= $row['post_caption'] ?>
             </p>

         </div>

         <!-- FOOTER ACTIONS -->
         <div class="card-footer bg-white border-0 pt-0 pb-3">
             <div class="d-flex justify-content-between">

                 <div class="btn-group btn-group-sm ms-auto">
                     <button class="btn text-secondary text-danger">
                         <i class="bi bi-heart h5"></i>
                     </button>
                     <button class="btn text-secondary" style="transform: translate(0px, -1px)">
                         <i class="bi bi-chat h5"></i>
                     </button>
                 </div>

             </div>
         </div>

     </div>
 <?php } ?>