<?php
include '../includes/db.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
  header("Location: list.php?msg=invalid");
  exit;
}

$id = (int) $_GET['id'];

// Check if employee exists and not already deleted
$checkQuery = "SELECT id FROM employees WHERE id = ? AND deleted_at IS NULL";
$checkStmt = mysqli_prepare($conn, $checkQuery);
mysqli_stmt_bind_param($checkStmt, 'i', $id);
mysqli_stmt_execute($checkStmt);
mysqli_stmt_store_result($checkStmt);

if (mysqli_stmt_num_rows($checkStmt) === 0) {
  header("Location: list.php?msg=invalid");
  exit;
}

$now = date('Y-m-d H:i:s');
$deleteQuery = "UPDATE employees SET deleted_at = ? WHERE id = ?";
$deleteStmt = mysqli_prepare($conn, $deleteQuery);
mysqli_stmt_bind_param($deleteStmt, 'si', $now, $id);

if (mysqli_stmt_execute($deleteStmt)) {
  header("Location: list.php?msg=deleted");
} else {
  header("Location: list.php?msg=error");
}
exit;
