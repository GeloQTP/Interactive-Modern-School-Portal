<div class="card mb-3 border border-success">
    <div class="card-body p-4 pb-0 pt-3">
        <img src="/../Modern Student Portal/src/img/Screenshot 2026-01-06 013627.png" alt="profile_picture" style="width:120px; height:110px; border-radius:50%" class="mb-3 d-flex mx-auto">
        <p class="mb-1">Username: <small class="ms-2"><?= $_SESSION['account_username'] ?></small></p>
        <p class="mb-1">Program: <small class="ms-2">BSCS</small></p>
        <p class="mb-1">Year: <small class="ms-2">4th Year</small></p>
        <p class="mb-1">Semester: <small class="ms-2">2nd</small></p>
        <p>Account Status:
            <i class=" bi bi-circle-fill text-success h6"></i>
        </p>
    </div>
</div>

<div class="card border border-success" style="height: 53.2vh;">
    <div class="card-header bg-success border-0 text-center text-light">
        <small>MENU</small>
    </div>
    <div class="card-body">
        <p><i class="bi bi-person pe-2 text-success"></i>Profile</p>
        <p><i class="bi bi-calendar pe-2 text-success"></i>Schedule</p>
        <p><i class="bi bi-bar-chart pe-2 text-success"></i>Grades</p>
        <p><i class="bi bi-envelope pe-2 text-success"></i>Messages</p>
        <p><i class="bi bi-cash pe-2 text-success"></i>Balance</p>
        <p><i class="bi bi-journal pe-2 text-success"></i>Curriculum</p>
        <p><i class="bi bi-gear pe-2 text-success"></i>Settings</p>
        <p class="mt-5"><i class="bi bi-box-arrow-left pe-2 text-success"></i>Logout</p>
    </div>
</div>