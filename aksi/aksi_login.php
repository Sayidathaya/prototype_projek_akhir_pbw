<?php
// session_start, BASE_URL, BASE_PATH, $koneksi sudah ada dari index.php
require_once BASE_PATH . '/model/AdminModel.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . BASE_URL . '/admin/login'); exit;
}

$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');

if (!$username || !$password) {
    $_SESSION['login_error'] = 'Username dan password wajib diisi.';
    header('Location: ' . BASE_URL . '/admin/login'); exit;
}

$adminModel = new AdminModel($koneksi);
$admin = $adminModel->login($username, $password);

if ($admin) {
    $_SESSION['admin'] = ['id' => $admin['id'], 'username' => $admin['username'], 'nama' => $admin['nama_lengkap']];
    header('Location: ' . BASE_URL . '/admin/dashboard'); exit;
} else {
    $_SESSION['login_error'] = 'Username atau password salah.';
    header('Location: ' . BASE_URL . '/admin/login'); exit;
}
