<?php include __DIR__ . '/config.php'; ?>
<!-- Sidebar Toggle Button -->
<button class="sidebar-toggle" onclick="toggleSidebar()">☰</button>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
  <div>
      <div class="logo">
        <img src="<?= $BASE_URL ?>assets/omvix_logo.png" alt="Omvix Logo">
      </div>
    <nav>
      <a href="<?= $BASE_URL ?>dashboard.php">Dashboard</a>
      <a href="<?= $BASE_URL ?>change_password.php">Change Password</a>
      <a href="<?= $BASE_URL ?>employee/list.php">Employees</a>
      <a href="<?= $BASE_URL ?>crm/dashboard.php">CRM</a>
      <!-- Add more module links here -->
    </nav>
  </div>
  <div class="logout">
    <a href="<?= $BASE_URL ?>logout.php">Logout</a>
  </div>
</div>

