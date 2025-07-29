<?php include '../includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Meeting Details - Omvix CRM</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?= $BASE_URL ?>assets/style.css">
</head>
<body class="sidebar-layout">
<div id="nav-container"></div>
<div class="main-content">
  <h2 class="page-title">Meeting / Demo Details</h2>

  <div class="section">
    <div class="info-item">
      <label>Lead Name</label>
      <div>Ravi Sharma</div>
    </div>
    <div class="info-item">
      <label>Mode</label>
      <div>Site Visit</div>
    </div>
    <div class="info-item">
      <label>Scheduled Date</label>
      <div>2025-08-01 14:00</div>
    </div>
    <div class="info-item">
      <label>Status</label>
      <div>Booked</div>
    </div>
    <div class="info-item">
      <label>Assigned To</label>
      <div>Lokesh Sharma</div>
    </div>
  </div>

  <div class="section">
    <h2 style="color: var(--accent-orange); font-size: 20px;">Update Demo Info</h2>
    <label for="status">Status</label>
    <select id="status">
      <option>Booked</option>
      <option>Completed</option>
      <option>Missed</option>
      <option>Cancelled</option>
    </select>

    <label for="pre">Pre-Demo Instructions</label>
    <textarea id="pre" rows="2"></textarea>

    <label for="post">Post-Demo Summary</label>
    <textarea id="post" rows="3"></textarea>

    <label for="next">Next Meeting Required?</label>
    <select id="next" onchange="toggleNext(this.value)">
      <option value="no">No</option>
      <option value="yes">Yes</option>
    </select>

    <div id="next-fields" style="display: none;">
      <label for="next-date">Next Date</label>
      <input type="datetime-local" id="next-date">

      <label for="next-mode">Mode</label>
      <select id="next-mode">
        <option>Call</option>
        <option>WhatsApp</option>
        <option>Online Video</option>
        <option>Site Visit</option>
      </select>
    </div>

    <button class="btn">Update Meeting</button>
  </div>

  <script>
    function toggleNext(val) {
      document.getElementById('next-fields').style.display = val === 'yes' ? 'block' : 'none';
    }
  </script>
</div>
<script src="<?= $BASE_URL ?>assets/nav.js"></script>
</body>
</html>

