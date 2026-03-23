<?php
// session_start sudah ada dari index.php
session_destroy();
header('Location: ' . BASE_URL . '/admin/login');
exit;
