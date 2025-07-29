<?php include '../includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CRM Reports - Omvix</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?= $BASE_URL ?>assets/style.css">
</head>
<body class="sidebar-layout">
<div id="nav-container"></div>
<div class="main-content">
  <h2 class="page-title">CRM Reports</h2>

  <div class="filters">
    <input type="date" placeholder="From Date" />
    <input type="date" placeholder="To Date" />
    <select>
      <option>Activity Type</option>
      <option>Follow-Up</option>
      <option>Task</option>
      <option>Meeting</option>
    </select>
    <select>
      <option>Status</option>
      <option>Pending</option>
      <option>Done</option>
      <option>Completed</option>
      <option>Missed</option>
    </select>
    <select>
      <option>Employee</option>
      <option>Hemant Singh</option>
      <option>Lokesh Sharma</option>
      <option>Bhanu Chaudhary</option>
    </select>
  </div>

  <div class="summary-section">
    <div class="summary-card">
      <h3>12</h3>
      <p>Total Follow-Ups</p>
    </div>
    <div class="summary-card">
      <h3>9</h3>
      <p>Follow-Ups Completed</p>
    </div>
    <div class="summary-card">
      <h3>5</h3>
      <p>Meetings Completed</p>
    </div>
    <div class="summary-card">
      <h3>3</h3>
      <p>Meetings Missed</p>
    </div>
    <div class="summary-card">
      <h3>8</h3>
      <p>Tasks In Progress</p>
    </div>
    <div class="summary-card">
      <h3>4</h3>
      <p>Tasks Completed</p>
    </div>
  </div>

  <div class="category-heading">Activity Log</div>
  <div class="report-table-wrapper">
    <table>
      <thead>
        <tr>
          <th>Employee</th>
          <th>Activity Type</th>
          <th>Lead/Title</th>
          <th>Status</th>
          <th>Mode</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Hemant Singh</td>
          <td>Follow-Up</td>
          <td>Ravi Sharma</td>
          <td>Done</td>
          <td>Call</td>
          <td>2025-07-30</td>
        </tr>
        <tr>
          <td>Lokesh Sharma</td>
          <td>Meeting</td>
          <td>Green Builders</td>
          <td>Completed</td>
          <td>Site Visit</td>
          <td>2025-07-30</td>
        </tr>
        <tr>
          <td>Bhanu Chaudhary</td>
          <td>Task</td>
          <td>Prepare Proposal</td>
          <td>Pending</td>
          <td>-</td>
          <td>2025-07-30</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<script src="<?= $BASE_URL ?>assets/nav.js"></script>
</body>
</html>

