 <?php
    $time = date("Y-m-d");

    try {
        $stmt = $conn->prepare("SELECT * FROM broadcasts WHERE expires_at > ?");
        $stmt->bind_param("s", $time);
        $stmt->execute();
    } catch (Exception $e) {
    }
    $result = $stmt->get_result();
    ?>

 <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
     <div class="carousel-inner">
         <div class="carousel-item active mb-2">
             <div class="card bg-success text-light" style="width:100%">
                 <div class="card-body">
                     <h5 class="card-title">Good Afternoon, <?= $_SESSION['account_username'] ?>!</h5>
                     <p class="card-text">Here are some Announcements for you Today!</p>
                 </div>
             </div>
         </div>
         <?php
            while ($row = $result->fetch_assoc()) {
            ?>
             <div class="carousel-item">
                 <div class="card border border-success mb-2">
                     <div class="card-body d-flex justify-content-between align-items-start">
                         <div class="d-flex">
                             <div class="me-3">
                                 <div class="rounded-circle <?= $row['theme_color'] ?>" style="width: 12px; height: 12px;"></div>
                             </div>
                             <div>
                                 <h6 class="fw-bold mb-1">
                                     📢 <?= $row['title'] ?>!
                                 </h6>
                                 <p class="my-2 text-muted small">
                                     <?= $row['announcement_message'] ?>
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         <?php } ?>
     </div>
 </div>