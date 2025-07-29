<?php include '../includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Task Details - Omvix CRM</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?= $BASE_URL ?>assets/style.css">
</head>
<body class="sidebar-layout">
<div id="nav-container"></div>
<div class="main-content">
  <h2 class="page-title">Task Details</h2>

  <div class="section">
    <div class="info-item">
      <label>Title</label>
      <div>Confirm Demo with Ravi</div>
    </div>
    <div class="info-item">
      <label>Description</label>
      <div>Call and confirm demo appointment for smart curtain demo.</div>
    </div>
    <div class="info-item">
      <label>Due Date</label>
      <div>2025-07-30 09:30</div>
    </div>
    <div class="info-item">
      <label>Status</label>
      <div>In Progress</div>
    </div>
    <div class="info-item">
      <label>Priority</label>
      <div>High</div>
    </div>
    <div class="info-item">
      <label>Assigned To</label>
      <div>Hemant Singh</div>
    </div>
  </div>

  <div class="section">
    <h2 style="color: var(--accent-orange); font-size: 20px;">Update Task</h2>
    <label for="status">Status</label>
    <select id="status">
      <option>Pending</option>
      <option>In Progress</option>
      <option>Completed</option>
    </select>

    <label for="priority">Priority</label>
    <select id="priority">
      <option>Low</option>
      <option>Medium</option>
      <option>High</option>
    </select>

    <label for="notes">Assigned Notes</label>
    <textarea id="notes" rows="3"></textarea>

    <label for="next">Assign Follow-Up Task?</label>
    <select id="next" onchange="toggleNext(this.value)">
      <option value="no">No</option>
      <option value="yes">Yes</option>
    </select>

    <div id="next-fields" style="display: none">
      <label for="next-date">Next Due Date</label>
      <input type="datetime-local" id="next-date">

      <label for="next-priority">Priority</label>
      <select id="next-priority">
        <option>Low</option>
        <option>Medium</option>
        <option>High</option>
      </select>
    </div>

    <button class="btn">Update Task</button>
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

