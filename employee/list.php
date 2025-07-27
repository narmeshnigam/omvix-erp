<?php
require_once '../includes/auth.php';
require_once '../includes/db.php';

// Handle deletion
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $stmt = $conn->prepare('DELETE FROM employees WHERE id = ?');
    if ($stmt) {
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $stmt->close();
    }
    header('Location: list.php');
    exit();
}

$result = $conn->query('SELECT * FROM employees');
$employees = $result ? $result->fetch_all(MYSQLI_ASSOC) : [];
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
    <a href="add.html" class="btn">+ Add Employee</a>
  </div>
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
        <?php foreach ($employees as $emp): ?>
        <tr>
          <td><img src="https://via.placeholder.com/40" alt="Profile" class="profile-pic" /></td>
          <td><?php echo htmlspecialchars($emp['name'] ?? ''); ?></td>
          <td><?php echo htmlspecialchars($emp['office_email'] ?? ''); ?></td>
          <td><?php echo htmlspecialchars($emp['role'] ?? ''); ?></td>
          <td><?php echo htmlspecialchars($emp['department'] ?? ''); ?></td>
          <td>
            <span class="status-badge <?php echo ($emp['status'] ?? '') === 'Active' ? 'status-active' : 'status-inactive'; ?>">
              <?php echo htmlspecialchars($emp['status'] ?? ''); ?>
            </span>
          </td>
          <td class="table-actions">
            <a href="edit.html?id=<?php echo $emp['id']; ?>">Edit</a>
            <a href="list.php?delete=<?php echo $emp['id']; ?>" onclick="return confirm('Delete this employee?');">Delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</main>
</div>
<script src="/assets/nav.js"></script>
</body>
</html>
