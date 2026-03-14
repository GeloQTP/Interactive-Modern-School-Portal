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
                 <div class="card-body text-center">
                     <h5 class="card-title">Good Afternoon, <?= $_SESSION['account_username'] ?>!</h5>
                     <p class="card-text">Here are some Announcements for you Today!</p>
                 </div>
             </div>
         </div>
         <?php
            while ($row = $result->fetch_assoc()) {
            ?>
             <div class="carousel-item mb-2">
                 <div class="card <?= $row['theme_color'] ?>" style="width:100%">
                     <div class="card-body">
                         <h5 class="card-title text-center">
                             📢 <?= $row['title'] ?>!
                         </h5>
                         <p class="card-text text-center"><?= $row['announcement_message'] ?></p>
                     </div>
                 </div>
             </div>
         <?php } ?>
     </div>
 </div>