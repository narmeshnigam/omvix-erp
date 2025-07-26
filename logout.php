<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Logged Out – Omvix ERP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <meta http-equiv="refresh" content="2;url=login.php">
  <style>
    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background-color: #FFF8F0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #5A4033;
    }

    .logout-message {
      text-align: center;
      background: #ffffff;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 8px 24px rgba(255, 111, 64, 0.15);
      max-width: 400px;
    }

    .logout-message h2 {
      color: #FF6F40;
      font-size: 24px;
      margin-bottom: 12px;
    }

    .logout-message p {
      font-size: 15px;
    }
  </style>
</head>
<body>
  <div class="logout-message">
    <h2>You’ve been logged out</h2>
    <p>Redirecting to login page...</p>
  </div>
</body>
</html>
