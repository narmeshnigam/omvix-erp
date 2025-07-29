<?php include '../includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demo Booking Manager - Omvix CRM</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= $BASE_URL ?>assets/style.css">
</head>
<body class="sidebar-layout">
<div id="nav-container"></div>
<div class="main-content">
  <h2 class="page-title">Demo Booking Manager</h2>

  <table>
    <thead>
      <tr>
        <th>Lead</th>
        <th>Date</th>
        <th>Mode</th>
        <th>Status</th>
        <th>Assigned To</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Ravi Sharma</td>
        <td>2025-08-01 14:00</td>
        <td>Site Visit</td>
        <td>Booked</td>
        <td>Lokesh Sharma</td>
        <td><button class="btn" onclick="openModal()">Update</button></td>
      </tr>
    </tbody>
  </table>

  <!-- Modal -->
  <div class="modal" id="modal">
    <div class="modal-content">
      <h2>Update Demo Booking</h2>
      <div class="form-group">
        <label for="status">Status</label>
        <select id="status">
          <option>Booked</option>
          <option>Completed</option>
          <option>Missed</option>
          <option>Cancelled</option>
        </select>
      </div>
      <div class="form-group">
        <label for="pre">Pre-Demo Instructions</label>
        <textarea id="pre" rows="2"></textarea>
      </div>
      <div class="form-group">
        <label for="post">Post-Demo Summary</label>
        <textarea id="post" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="next">Next Meeting Required?</label>
        <select id="next" onchange="toggleNext(this.value)">
          <option value="no">No</option>
          <option value="yes">Yes</option>
        </select>
      </div>
      <div id="next-fields" style="display:none">
        <div class="form-group">
          <label for="next-date">Next Date</label>
          <input type="datetime-local" id="next-date">
        </div>
        <div class="form-group">
          <label for="next-mode">Mode</label>
          <select id="next-mode">
            <option>Call</option>
            <option>WhatsApp</option>
            <option>Online Video</option>
            <option>Site Visit</option>
          </select>
        </div>
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
    function toggleNext(value) {
      document.getElementById('next-fields').style.display = value === 'yes' ? 'block' : 'none';
    }
  </script>
</div>
<script src="<?= $BASE_URL ?>assets/nav.js"></script>
</body>
</html>

