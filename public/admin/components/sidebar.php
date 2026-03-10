     <aside id="sidebar" style="position: fixed; height:100vh;">
         <div class="d-flex">
             <button id="toggle-btn">
                 <i class="bi bi-grid"></i>
             </button>
             <div class="sidebar-logo">
                 <a href="#">Welcome, <?= $_SESSION['account_username'] ?? '' ?>!</a>
             </div>
         </div>

         <ul class="sidebar-nav">

             <li class="navbar-item">
                 <a href="/Modern Student Portal/public/admin/AdminDashboard.php" class="sidebar-link">
                     <i class="bi bi-house"></i>
                     <span>Dashboard</span>
                 </a>
             </li>

             <li class="navbar-item">
                 <a href="/Modern Student Portal/public/admin/Pages/VerifyUsers.php" class="sidebar-link">
                     <i class="bi bi-check2"></i>
                     <span>Verify Users</span>
                 </a>
             </li>

             <li class="navbar-item">
                 <a href="/Modern Student Portal/public/admin/Pages/UserManagement.php" class="sidebar-link">
                     <i class="bi bi-people"></i>
                     <span>User Management</span>
                 </a>
             </li>

             <li class="navbar-item">
                 <a href="/Modern Student Portal/public/admin/Pages/TeacherManagement.php" class="sidebar-link">
                     <i class="bi bi-eyeglasses"></i>
                     <span>Manage Teachers</span>
                 </a>
             </li>

             <li class="navbar-item">
                 <a href="/Modern Student Portal/public/admin/Pages/Content&Posts.php" class="sidebar-link">
                     <i class="bi bi-megaphone"></i>
                     <span>Posts & Announcements</span>
                 </a>
             </li>

             <li class="navbar-item">
                 <a href="/Modern Student Portal/public/admin/Pages/SetEvent.php" class="sidebar-link">
                     <i class="bi bi-calendar"></i>
                     <span>Event Calendar</span>
                 </a>
             </li>

             <li class="navbar-item">
                 <a href="/Modern Student Portal/public/admin/Pages/AcademicData.php" class="sidebar-link">
                     <i class="bi bi-book"></i>
                     <span>Academic Data</span>
                 </a>
             </li>

             <li class="navbar-item">
                 <a href="#" class="sidebar-link">
                     <i class="bi bi-mortarboard"></i>
                     <span>Batch Management</span>
                 </a>
             </li>

             <li class="navbar-item">
                 <a href="#" class="sidebar-link">
                     <i class="bi bi-envelope"></i>
                     <span>Communications</span>
                 </a>
             </li>

             <li class="navbar-item">
                 <a href="#" class="sidebar-link">
                     <i class="bi bi-graph-up"></i>
                     <span>Reports and Analytics</span>
                 </a>
             </li>

             <li class="navbar-item">
                 <a href="#" class="sidebar-link">
                     <i class="bi bi-gear"></i>
                     <span>System Settings</span>
                 </a>
             </li>

             <li class="navbar-item">
                 <a href="#" class="sidebar-link">
                     <i class="bi bi-shield-check"></i>
                     <span>Security and Audit</span>
                 </a>
             </li>

         </ul>

         <div class="sidebar-footer">
             <a href="#" class="sidebar-link">
                 <i class="bi bi-box-arrow-left"></i>
                 <span>Logout</span>
             </a>
         </div>

     </aside>