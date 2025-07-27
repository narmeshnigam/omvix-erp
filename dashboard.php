

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard – Omvix ERP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --background-light: #FFF8F0;
      --text-dark: #5A4033;
      --accent-orange: #FF6F40;
      --highlight-orange: #FFAE42;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: var(--background-light);
      color: var(--text-dark);
      display: flex;
      min-height: 100vh;
    }

    .sidebar {
      width: 260px;
      background-color: #fff;
      box-shadow: 2px 0 10px rgba(0, 0, 0, 0.05);
      padding: 24px 16px;
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      transition: left 0.3s ease;
    }

    .sidebar .logo {
      text-align: center;
      margin-bottom: 40px;
    }

    .sidebar .logo img {
      width: 100px;
      height: auto;
    }

    .sidebar nav a {
      display: block;
      padding: 10px 16px;
      margin-bottom: 12px;
      border-radius: 8px;
      text-decoration: none;
      color: var(--text-dark);
      font-weight: 500;
      transition: background 0.2s;
    }

    .sidebar nav a:hover {
      background-color: var(--background-light);
    }

    .logout {
      margin-top: auto;
    }

    .logout a {
      display: block;
      padding: 10px 16px;
      border-radius: 8px;
      text-decoration: none;
      background-color: var(--accent-orange);
      color: #fff;
      text-align: center;
      font-weight: 600;
    }

    .main-content {
      margin-left: 260px;
      padding: 40px 32px;
      flex: 1;
    }

    h1 {
      font-size: 28px;
      color: var(--accent-orange);
      margin-bottom: 16px;
    }

    p {
      font-size: 16px;
      line-height: 1.5;
    }

    /* Toggle button for mobile */
    .sidebar-toggle {
      position: fixed;
      top: 16px;
      left: 16px;
      background-color: var(--accent-orange);
      color: #fff;
      font-size: 24px;
      border: none;
      border-radius: 8px;
      padding: 8px 12px;
      z-index: 1100;
      display: none;
    }

    @media (max-width: 768px) {
      .sidebar {
        left: -260px;
        z-index: 1000;
      }

      .sidebar.open {
        left: 0;
      }

      .main-content {
        margin-left: 0;
        padding-top: 80px;
      }

      .sidebar-toggle {
        display: block;
      }
    }
  </style>
</head>
<body>

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

<!-- Main Content -->
<div class="main-content">
  <h1>Welcome to Omvix ERP</h1>
  <p>This is your dashboard. From here, you can manage all operations and access ERP modules as they are built.</p>
</div>

<script>
function toggleSidebar() {
  const sidebar = document.getElementById('sidebar');
  sidebar.classList.toggle('open');
}
</script>

</body>
</html>
