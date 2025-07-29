<?php include '../includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRM Dashboard - Omvix</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= $BASE_URL ?>assets/style.css">
</head>
<body class="sidebar-layout">
<div id="nav-container"></div>
<div class="main-content">
  <h2 class="page-title">CRM Dashboard</h2>
  <h1>CRM Dashboard</h1>

  <nav>
    <a href="#">Leads</a>
    <a href="#">Follow-Ups</a>
    <a href="#">Meetings</a>
    <a href="#">Tasks</a>
    <a href="#">Reports</a>
  </nav>

  <div class="grid">
    <div class="card">
      <h2>128</h2>
      <p>Total Leads</p>
    </div>
    <div class="card">
      <h2>43</h2>
      <p>Open Leads</p>
    </div>
    <div class="card">
      <h2>9</h2>
      <p>Today's Follow-Ups</p>
    </div>
    <div class="card">
      <h2>3</h2>
      <p>Today's Meetings</p>
    </div>
    <div class="card">
      <h2>7</h2>
      <p>Pending Tasks</p>
    </div>
  </div>

  <div>
    <div class="section-title">Today's Follow-Ups</div>
    <table>
      <tr>
        <th>Lead</th>
        <th>Mode</th>
        <th>Time</th>
        <th>Assigned To</th>
        <th>Status</th>
      </tr>
      <tr>
        <td>Ravi Sharma</td>
        <td>Call</td>
        <td>11:00 AM</td>
        <td>Hemant Singh</td>
        <td>Pending</td>
      </tr>
    </table>

    <div class="section-title">Today's Meetings</div>
    <table>
      <tr>
        <th>Lead</th>
        <th>Mode</th>
        <th>Time</th>
        <th>Assigned To</th>
        <th>Status</th>
      </tr>
      <tr>
        <td>Ravi Sharma</td>
        <td>Site Visit</td>
        <td>2:00 PM</td>
        <td>Lokesh Sharma</td>
        <td>Booked</td>
      </tr>
    </table>

    <div class="section-title">Today's Tasks</div>
    <table>
      <tr>
        <th>Task</th>
        <th>Lead</th>
        <th>Assigned To</th>
        <th>Due Time</th>
        <th>Status</th>
      </tr>
      <tr>
        <td>Confirm Demo</td>
        <td>Ravi Sharma</td>
        <td>Hemant Singh</td>
        <td>09:30 AM</td>
        <td>In Progress</td>
      </tr>
    </table>
  </div>
</div>
<script src="<?= $BASE_URL ?>assets/nav.js"></script>
</body>
</html>

