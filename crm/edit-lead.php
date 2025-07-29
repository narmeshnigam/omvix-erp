<?php include '../includes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Lead - Omvix CRM</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= $BASE_URL ?>assets/style.css">
</head>
<body class="sidebar-layout">
<div id="nav-container"></div>
<div class="main-content">
  <h2 class="page-title">Edit Lead</h2>
  <form>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" value="Ravi Sharma">
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="tel" id="phone" name="phone" value="9876543210">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" value="ravi@example.com">
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" id="address" name="address" value="123 Golf Course Road, Gurgaon">
    </div>
    <div class="form-group">
      <label>Location</label>
      <iframe id="map" class="map-frame" src="https://maps.google.com/maps?q=28.4586,77.1057&z=15&output=embed"></iframe>
    </div>
    <div class="form-group">
      <label for="latitude">Latitude</label>
      <input type="text" id="latitude" name="latitude" value="28.458600">
    </div>
    <div class="form-group">
      <label for="longitude">Longitude</label>
      <input type="text" id="longitude" name="longitude" value="77.105700">
    </div>
    <div class="form-group">
      <label for="lead_type">Lead Type</label>
      <select id="lead_type" name="lead_type">
        <option selected>Customer</option>
        <option>Partner</option>
        <option>Service Provider</option>
      </select>
    </div>
    <div class="form-group">
      <label for="lead_subtype">Lead Sub-Type</label>
      <select id="lead_subtype" name="lead_subtype">
        <option selected>Individual</option>
        <option>Builder</option>
        <option>Architect</option>
        <option>Institution</option>
        <option>Electrical Contractor</option>
        <option>Others</option>
      </select>
    </div>
    <div class="form-group">
      <label>Interested In</label>
      <div class="checkbox-group">
        <label><input type="checkbox" checked name="interested_in[]" value="Smart Locks">Smart Locks</label>
        <label><input type="checkbox" checked name="interested_in[]" value="Mesh WiFi">Mesh WiFi</label>
        <label><input type="checkbox" name="interested_in[]" value="Smart Curtains">Smart Curtains</label>
        <label><input type="checkbox" name="interested_in[]" value="Sensors">Sensors</label>
        <label><input type="checkbox" name="interested_in[]" value="Video Door Bells">Video Door Bells</label>
        <label><input type="checkbox" name="interested_in[]" value="Electrical Safety Inspection">Electrical Safety Inspection</label>
      </div>
    </div>
    <div class="form-group">
      <label for="source">Source</label>
      <select id="source" name="source">
        <option selected>Website</option>
        <option>Ad</option>
        <option>Referral</option>
        <option>Walk-in</option>
        <option>Campaign</option>
        <option>Manual</option>
      </select>
    </div>
    <div class="form-group">
      <label for="notes">Notes</label>
      <textarea id="notes" name="notes" rows="3">Inquired via website popup</textarea>
    </div>
    <button type="submit" class="submit-btn">Update Lead</button>
  </form>
</div>
<script src="<?= $BASE_URL ?>assets/nav.js"></script>
</body>
</html>

