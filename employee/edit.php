<?php
include '../includes/db.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
  header("Location: list.php?msg=invalid");
  exit;
}

$id = (int) $_GET['id'];
$msg = '';

// Fetch existing data
$select = "SELECT * FROM employees WHERE id = ? AND deleted_at IS NULL LIMIT 1";
$stmt = mysqli_prepare($conn, $select);
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) === 0) {
  header("Location: list.php?msg=invalid");
  exit;
}

$employee = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = trim($_POST['name'] ?? '');
  $personal_email = trim($_POST['personal_email'] ?? '');
  $office_email = trim($_POST['office_email'] ?? '');
  $personal_phone = trim($_POST['personal_phone'] ?? '');
  $office_phone = trim($_POST['office_phone'] ?? '');
  $role = trim($_POST['role'] ?? '');
  $department = trim($_POST['department'] ?? '');
  $status = $_POST['status'] ?? 'Inactive';
  $profile_picture = $employee['profile_picture'];

  if (!empty($_FILES['profile_picture']['name'])) {
    $filename = time() . '_' . basename($_FILES['profile_picture']['name']);
    $target_path = __DIR__ . '/profile-pictures/' . $filename;
    if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $target_path)) {
      $profile_picture = 'employee/profile-pictures/' . $filename;
    }
  }

  $update = "UPDATE employees SET name=?, personal_email=?, office_email=?, personal_phone=?, office_phone=?, role=?, department=?, status=?, profile_picture=?, updated_at=NOW() WHERE id=?";
  $stmt = mysqli_prepare($conn, $update);
  mysqli_stmt_bind_param($stmt, 'sssssssssi', $name, $personal_email, $office_email, $personal_phone, $office_phone, $role, $department, $status, $profile_picture, $id);

  if (mysqli_stmt_execute($stmt)) {
    header("Location: list.php?msg=updated");
    exit;
  } else {
    $msg = 'Error updating employee.';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Employee – Omvix</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body class="sidebar-layout">
<div id="nav-container"></div>
<div class="main-content">
<main class="narrow-container">
  <h2 class="page-title">Edit Employee</h2>
  <?php if (!empty($msg)): ?>
    <div class="alert error"><?php echo htmlspecialchars($msg); ?></div>
  <?php endif; ?>
  <div class="form-box">
    <form method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($employee['name']); ?>" required />
      </div>
      <div class="form-group">
        <label for="personal_email">Personal Email</label>
        <input type="email" id="personal_email" name="personal_email" value="<?php echo htmlspecialchars($employee['personal_email']); ?>" required />
      </div>
      <div class="form-group">
        <label for="office_email">Office Email</label>
        <input type="email" id="office_email" name="office_email" value="<?php echo htmlspecialchars($employee['office_email']); ?>" required />
      </div>
      <div class="form-group">
        <label for="personal_phone">Personal Phone</label>
        <input type="tel" id="personal_phone" name="personal_phone" value="<?php echo htmlspecialchars($employee['personal_phone']); ?>" />
      </div>
      <div class="form-group">
        <label for="office_phone">Office Phone</label>
        <input type="tel" id="office_phone" name="office_phone" value="<?php echo htmlspecialchars($employee['office_phone']); ?>" />
      </div>
      <div class="form-group">
        <label for="role">Role</label>
        <select id="role" name="role">
          <option value="">Select Role</option>
          <option value="Admin" <?php if ($employee['role'] === 'Admin') echo 'selected'; ?>>Admin</option>
          <option value="Staff" <?php if ($employee['role'] === 'Staff') echo 'selected'; ?>>Staff</option>
        </select>
      </div>
      <div class="form-group">
        <label for="department">Department</label>
        <input type="text" id="department" name="department" value="<?php echo htmlspecialchars($employee['department']); ?>" />
      </div>
      <div class="form-group">
        <label>Status</label>
        <div class="radio-group">
          <label><input type="radio" name="status" value="Active" <?php if ($employee['status'] === 'Active') echo 'checked'; ?> /> Active</label>
          <label><input type="radio" name="status" value="Inactive" <?php if ($employee['status'] === 'Inactive') echo 'checked'; ?> /> Inactive</label>
        </div>
      </div>
      <div class="form-group">
        <label for="profile_picture">Profile Picture</label>
        <input type="file" id="profile_picture" name="profile_picture" accept="image/*" />
      </div>
      <button type="submit" class="btn">Update Employee</button>
    </form>
  </div>
</main>
</div>
<script src="../assets/nav.js"></script>
</body>
</html>
