

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Change Password – Omvix ERP</title>
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
      z-index: 1000;
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
      margin-bottom: 24px;
    }

    form {
      max-width: 400px;
      background: #fff;
      padding: 24px;
      border-radius: 16px;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.05);
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
    }

    input[type="password"] {
      width: 100%;
      padding: 10px 12px;
      border: 1px solid var(--accent-orange);
      border-radius: 8px;
      margin-bottom: 20px;
      font-size: 15px;
    }

    button {
      width: 100%;
      background-color: var(--highlight-orange);
      color: #000;
      font-weight: 600;
      border: none;
      padding: 12px;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background-color: var(--accent-orange);
      color: #fff;
    }

    .sidebar-toggle {
      position: fixed;
      top: 16px;
      left: 16px;
      background-color: var(--accent-orange);
      color: #fff;
      font-size: 20px;
      line-height: 1;
      border: none;
      border-radius: 6px;
      padding: 8px 12px;
      z-index: 1100;
      display: none;
      width: auto;
      height: auto;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      cursor: pointer;
    }

    @media (max-width: 768px) {
      .sidebar {
        left: -260px;
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
      <!-- Add more modules here -->
    </nav>
  </div>
  <div class="logout">
    <a href="logout.php">Logout</a>
  </div>
</div>

<!-- Main Content -->
<div class="main-content">
  <h1>Change Your Password</h1>
  <form method="post" action="process_change_password.php">
    <label for="current_password">Current Password</label>
    <input type="password" id="current_password" name="current_password" required>

    <label for="new_password">New Password</label>
    <input type="password" id="new_password" name="new_password" required>

    <label for="confirm_password">Confirm New Password</label>
    <input type="password" id="confirm_password" name="confirm_password" required>

    <button type="submit">Update Password</button>
  </form>
</div>

<script>
function toggleSidebar() {
  const sidebar = document.getElementById('sidebar');
  const isOpen = sidebar.classList.toggle('open');
  document.body.style.overflow = isOpen ? 'hidden' : '';
}
</script>

</body>
</html>
