<?php
include '../includes/db.php';

$search = $_GET['search'] ?? '';
$role = $_GET['role'] ?? '';
$status = $_GET['status'] ?? '';

$query = "SELECT * FROM employees WHERE deleted_at IS NULL";
$params = [];
$types = '';

if (!empty($search)) {
  $query .= " AND (name LIKE ? OR office_email LIKE ?)";
  $searchParam = "%$search%";
  $params[] = $searchParam;
  $params[] = $searchParam;
  $types .= 'ss';
}
if (!empty($role)) {
  $query .= " AND role = ?";
  $params[] = $role;
  $types .= 's';
}
if (!empty($status)) {
  $query .= " AND status = ?";
  $params[] = $status;
  $types .= 's';
}

$query .= " ORDER BY id DESC";
$stmt = mysqli_prepare($conn, $query);
if (!empty($params)) {
  mysqli_stmt_bind_param($stmt, $types, ...$params);
}
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Listing – Omvix</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/style.css">
</head>
<body class="sidebar-layout">
<div id="nav-container"></div>
<div class="main-content">
<main class="container">
  <h2 class="page-title">Employees</h2>
  <div class="list-header">
    <p class="text-muted">Manage your current staff and their details.</p>
    <a href="add.php" class="btn">+ Add Employee</a>
  </div>

  <?php if (isset($_GET['msg'])): ?>
    <div class="alert">
      <?php if ($_GET['msg'] === 'deleted'): ?>
        <p class="success">Employee deleted successfully.</p>
      <?php elseif ($_GET['msg'] === 'error'): ?>
        <p class="error">Something went wrong while deleting.</p>
      <?php elseif ($_GET['msg'] === 'invalid'): ?>
        <p class="warning">Invalid employee ID.</p>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <form method="get" class="filter-bar">
    <input type="text" name="search" placeholder="Search by name or email" class="search-input" value="<?php echo htmlspecialchars($search); ?>" />
    <select class="filter-select" name="role">
      <option value="">All Roles</option>
      <option value="Admin" <?php if ($role === 'Admin') echo 'selected'; ?>>Admin</option>
      <option value="Staff" <?php if ($role === 'Staff') echo 'selected'; ?>>Staff</option>
    </select>
    <select class="filter-select" name="status">
      <option value="">All Status</option>
      <option value="Active" <?php if ($status === 'Active') echo 'selected'; ?>>Active</option>
      <option value="Inactive" <?php if ($status === 'Inactive') echo 'selected'; ?>>Inactive</option>
    </select>
    <button type="submit" class="btn">Filter</button>
  </form>

  <div class="card">
    <table>
      <thead>
        <tr>
          <th>Profile</th>
          <th>Name</th>
          <th>Office Email</th>
          <th>Role</th>
          <th>Department</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
          <td>
            <img src="<?php echo $row['profile_picture'] ?: 'https://via.placeholder.com/40'; ?>" alt="Profile" class="profile-pic" />
          </td>
          <td><?php echo htmlspecialchars($row['name']); ?></td>
          <td><?php echo htmlspecialchars($row['office_email']); ?></td>
          <td><?php echo htmlspecialchars($row['role']); ?></td>
          <td><?php echo htmlspecialchars($row['department']); ?></td>
          <td>
            <span class="status-badge <?php echo strtolower($row['status']) === 'active' ? 'status-active' : 'status-inactive'; ?>">
              <?php echo htmlspecialchars($row['status']); ?>
            </span>
          </td>
          <td class="table-actions">
            <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
            <a href="delete.php?id=<?php echo $row['id']; ?>" class="delete" onclick="return confirm('Are you sure you want to delete this employee?');">Delete</a>
          </td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</main>
</div>
<script src="/assets/nav.js"></script>
</body>
</html>
