<?php
session_start();
include_once 'includes/config.php';
if (!isset($_SESSION['user_id'])) {
  header("Location: {$BASE_URL}login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard – Omvix ERP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= $BASE_URL ?>assets/style.css">
</head>
<body class="sidebar-layout">

<div id="nav-container"></div>

<!-- Main Content -->
<div class="main-content">
  <h1>Welcome to Omvix ERP</h1>
  <p>This is your dashboard. From here, you can manage all operations and access ERP modules as they are built.</p>
</div>
<script>
  const BASE_URL = "<?= $BASE_URL ?>";
</script>
<script src="<?= $BASE_URL ?>assets/nav.js"></script>
</body>
</html>