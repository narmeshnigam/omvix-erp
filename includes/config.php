<?php
$host = $_SERVER['HTTP_HOST'] ?? '';
if ($host === 'localhost' || $host === '127.0.0.1') {
    $BASE_URL = '/omvix-erp/';
} else {
    $BASE_URL = '/';
}
?>
