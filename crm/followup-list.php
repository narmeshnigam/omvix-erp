<?php include '../includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Follow-Up Manager - Omvix CRM</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= $BASE_URL ?>assets/style.css">
</head>
<body class="sidebar-layout">
<div id="nav-container"></div>
<div class="main-content">
  <h2 class="page-title">Follow-Up Manager</h2>

  <div class="filter-bar">
    <input type="text" class="search-input" placeholder="Search by Lead Name">
    <select class="filter-select">
      <option>Mode</option>
      <option>Call</option>
      <option>WhatsApp</option>
      <option>Email</option>
      <option>Visit</option>
    </select>
    <select class="filter-select">
      <option>Status</option>
      <option>Pending</option>
      <option>Done</option>
      <option>Rescheduled</option>
      <option>Cancelled</option>
    </select>
    <select class="filter-select">
      <option>Response</option>
      <option>Answered & Finalized</option>
      <option>Postponed</option>
      <option>Not Interested</option>
      <option>No Response</option>
      <option>Revisit Later</option>
    </select>
  </div>

  <table>
    <thead>
      <tr>
        <th>Lead</th>
        <th>Date</th>
        <th>Mode</th>
        <th>Status</th>
        <th>Response</th>
        <th>Summary</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Ravi Sharma</td>
        <td>2025-07-30</td>
        <td>Call</td>
        <td>Pending</td>
        <td>—</td>
        <td>—</td>
        <td><button class="btn" onclick="openModal()">Mark Done / Reschedule</button></td>
      </tr>
    </tbody>
  </table>

  <!-- Modal -->
  <div class="modal" id="modal">
    <div class="modal-content">
      <h2>Update Follow-Up</h2>
      <div class="form-group">
        <label for="response">Response</label>
        <select id="response">
          <option>Answered & Finalized</option>
          <option>Postponed</option>
          <option>Not Interested</option>
          <option>No Response</option>
          <option>Revisit Later</option>
        </select>
      </div>
      <div class="form-group">
        <label for="summary">Response Summary</label>
        <textarea id="summary" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="next">Next Follow-Up Required?</label>
        <select id="next" onchange="toggleNextFollowup(this.value)">
          <option value="no">No</option>
          <option value="yes">Yes</option>
        </select>
      </div>
      <div id="next-fields" style="display: none;">
        <div class="form-group">
          <label for="next-date">Next Date</label>
          <input type="datetime-local" id="next-date">
        </div>
        <div class="form-group">
          <label for="next-mode">Mode</label>
          <select id="next-mode">
            <option>Call</option>
            <option>WhatsApp</option>
            <option>Email</option>
            <option>Visit</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="notes">Internal Notes</label>
        <textarea id="notes" rows="2"></textarea>
      </div>
      <button class="btn" onclick="closeModal()">Save</button>
    </div>
  </div>

  <script>
    function openModal() {
      document.getElementById('modal').style.display = 'flex';
    }
    function closeModal() {
      document.getElementById('modal').style.display = 'none';
    }
    function toggleNextFollowup(val) {
      document.getElementById('next-fields').style.display = val === 'yes' ? 'block' : 'none';
    }
  </script>
</div>
<script src="<?= $BASE_URL ?>assets/nav.js"></script>
</body>
</html>

