<div class="card mb-3 border border-success">
    <div class="card-header bg-success border-0 text-center text-light">
        <small>PROFILE</small>
    </div>
    <div class="card-body p-4 pb-0 pt-3">
        <img src="/../Modern Student Portal/src/img/Screenshot 2026-01-06 013627.png" alt="profile_picture" style="width:120px; height:110px; border-radius:50%" class="mb-3 d-flex mx-auto">
        <hr>
        <div class="d-flex">
            <p class="mb-1">Username:</p>
            <span class="ms-auto"><?= $_SESSION['account_username'] ?? '' ?></span>
        </div>
        <div class="d-flex">
            <p class="mb-1">Program:</p>
            <span class="ms-auto"><?= $_SESSION['Program'] ?? '' ?></span>
        </div>
        <div class="d-flex">
            <p class="mb-1">Year:</p>
            <span class="ms-auto"><?= $_SESSION['YearLevel'] ?? '' ?></span>
        </div>
        <div class="d-flex">
            <p class="mb-1">Semester:</p>
            <span class="ms-auto">2nd</span>
        </div>
        <div class="d-flex">
            <p>Account Status:</p>
            <i class="bi bi-circle-fill text-success ms-auto"></i>
        </div>
    </div>
</div>

<div class="card border border-success" style="height: 53.2vh;">
    <div class="card-header bg-success border-0 text-center text-light">
        <small>MAIN</small>
    </div>
    <div class="card-body">
        <p><i class="bi bi-calendar pe-2 text-success"></i><a href="#">My Schedule</a></p>
        <p><i class="bi bi-bar-chart pe-2 text-success"></i><a href="#">My Grades</a></p>
        <p><i class="bi bi-envelope pe-2 text-success"></i><a href="#">Messages</a></p>
        <p><i class="bi bi-cash pe-2 text-success"></i><a href="#">My Balance</a></p>
        <p><i class="bi bi-journal pe-2 text-success"></i><a href="#">Curriculum</a></p>
    </div>
    <div class="card-header bg-success border-0 text-center text-light">
        <small>ACCOUNT</small>
    </div>
    <div class="card-body">
        <p><i class="bi bi-person pe-2 text-success"></i><a href="#">Profile</a></p>
        <p><i class="bi bi-gear pe-2 text-success"></i><a href="#">Settings</a></p>
        <p><i class="bi bi-box-arrow-left pe-2 text-success"></i><a href="#">Logout</a></p>
    </div>
</div>