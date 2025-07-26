<?php
/**
 * Central navigation sidebar
 */
?>
<!-- Sidebar Toggle Button -->
<button class="sidebar-toggle" onclick="toggleSidebar()">☰</button>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
  <div>
    <div class="logo">
      <img src="assets/omvix_logo.png" alt="Omvix Logo">
    </div>
    <nav>
      <a href="dashboard.php">Dashboard</a>
      <a href="change_password.php">Change Password</a>
      <!-- Add more module links here -->
    </nav>
  </div>
  <div class="logout">
    <a href="logout.php">Logout</a>
  </div>
</div>

<script>
function toggleSidebar() {
  const sidebar = document.getElementById('sidebar');
  const isOpen = sidebar.classList.toggle('open');
  document.body.style.overflow = isOpen ? 'hidden' : '';
}
</script>
