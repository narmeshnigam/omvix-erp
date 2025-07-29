<?php include '../includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lead Details - Omvix CRM</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?= $BASE_URL ?>assets/style.css">
</head>
<body class="sidebar-layout">
<div id="nav-container"></div>
<div class="main-content">
  <h2 class="page-title">Lead Details</h2>

  <div class="section">
    <h2>Basic Information</h2>
    <div class="info-grid">
      <div class="info-item">
        <label>Name</label>
        <div>Ravi Sharma</div>
      </div>
      <div class="info-item">
        <label>Phone</label>
        <div>9876543210</div>
      </div>
      <div class="info-item">
        <label>Email</label>
        <div>ravi@example.com</div>
      </div>
      <div class="info-item">
        <label>Address</label>
        <div>123 Golf Course Road, Gurgaon</div>
      </div>
      <div class="info-item">
        <label>Latitude / Longitude</label>
        <div>28.4586 / 77.1057</div>
      </div>
      <div class="info-item">
        <label>Lead Type / Sub-Type</label>
        <div>Customer / Individual</div>
      </div>
      <div class="info-item">
        <label>Interested In</label>
        <div>Smart Locks, Mesh WiFi</div>
      </div>
      <div class="info-item">
        <label>Source</label>
        <div>Website</div>
      </div>
      <div class="info-item">
        <label>Status</label>
        <div>New</div>
      </div>
      <div class="info-item">
        <label>Assigned To</label>
        <div>Hemant Singh</div>
      </div>
    </div>
  </div>

  <div class="section">
    <h2>Follow-Ups</h2>
    <table>
      <thead>
        <tr>
          <th>Date</th>
          <th>Mode</th>
          <th>Status</th>
          <th>Response</th>
          <th>Summary</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>2025-07-30</td>
          <td>Call</td>
          <td>Done</td>
          <td>Answered & Finalized</td>
          <td>Installation next week</td>
        </tr>
      </tbody>
    </table>
    <div class="btn-group">
      <button class="btn">Add Follow-Up</button>
    </div>
  </div>

  <div class="section">
    <h2>Meetings / Demos</h2>
    <table>
      <thead>
        <tr>
          <th>Date</th>
          <th>Mode</th>
          <th>Status</th>
          <th>Summary</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>2025-08-01</td>
          <td>Site Visit</td>
          <td>Booked</td>
          <td>Carry curtain demo kit</td>
        </tr>
      </tbody>
    </table>
    <div class="btn-group">
      <button class="btn">Add Meeting</button>
    </div>
  </div>

  <div class="section">
    <h2>Tasks</h2>
    <table>
      <thead>
        <tr>
          <th>Title</th>
          <th>Due Date</th>
          <th>Status</th>
          <th>Priority</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Confirm Demo with Ravi</td>
          <td>2025-07-30</td>
          <td>In Progress</td>
          <td>High</td>
        </tr>
      </tbody>
    </table>
    <div class="btn-group">
      <button class="btn">Add Task</button>
    </div>
  </div>
</div>
<script src="<?= $BASE_URL ?>assets/nav.js"></script>
</body>
</html>

