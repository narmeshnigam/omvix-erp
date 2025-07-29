<?php include '../includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lead List - Omvix CRM</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= $BASE_URL ?>assets/style.css">
</head>
<body class="sidebar-layout">
<div id="nav-container"></div>
<div class="main-content">
  <h2 class="page-title">Lead List</h2>

  <div class="filter-bar">
    <input type="text" class="search-input" placeholder="Search name/email/phone...">
    <select class="filter-select">
      <option>Status</option>
      <option>New</option>
      <option>Contacted</option>
      <option>Interested</option>
      <option>Converted</option>
      <option>Dropped</option>
    </select>
    <select class="filter-select">
      <option>Type</option>
      <option>Customer</option>
      <option>Partner</option>
      <option>Service Provider</option>
    </select>
    <select class="filter-select">
      <option>Sub-Type</option>
      <option>Individual</option>
      <option>Builder</option>
      <option>Architect</option>
      <option>Institution</option>
      <option>Electrical Contractor</option>
    </select>
    <select class="filter-select">
      <option>Source</option>
      <option>Website</option>
      <option>Ad</option>
      <option>Referral</option>
      <option>Walk-in</option>
      <option>Campaign</option>
      <option>Manual</option>
    </select>
  </div>

  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Type</th>
        <th>Sub-Type</th>
        <th>Interested In</th>
        <th>Status</th>
        <th>Assigned To</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Ravi Sharma</td>
        <td>9876543210</td>
        <td>Customer</td>
        <td>Individual</td>
        <td>Smart Locks, Mesh WiFi</td>
        <td>New</td>
        <td>Hemant Singh</td>
        <td class="action-btns">
          <button>Edit</button>
          <button>Follow-Up</button>
          <button>Demo</button>
          <button>Task</button>
        </td>
      </tr>
      <tr>
        <td>Green Builders</td>
        <td>8800123456</td>
        <td>Partner</td>
        <td>Builder</td>
        <td>Smart Sensors, Video Door Phones</td>
        <td>Interested</td>
        <td>Bhanu Chaudhary</td>
        <td class="action-btns">
          <button>Edit</button>
          <button>Follow-Up</button>
          <button>Demo</button>
          <button>Task</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>
<script src="<?= $BASE_URL ?>assets/nav.js"></script>
</body>
</html>

