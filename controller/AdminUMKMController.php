<?php
if (!isset($_SESSION['admin'])) { header('Location: ' . BASE_URL . '/admin/login'); exit; }

require_once BASE_PATH . '/model/UMKMModel.php';
$umkmModel = new UMKMModel($koneksi);

$action = $_GET['action'] ?? 'index';
$id     = (int)($_GET['id'] ?? 0);
$pesan_sukses = $_SESSION['pesan_sukses'] ?? null;
$pesan_error  = $_SESSION['pesan_error'] ?? null;
unset($_SESSION['pesan_sukses'], $_SESSION['pesan_error']);

if ($action === 'edit' && $id) {
    $data_umkm = $umkmModel->getById($id);
    if (!$data_umkm) { header('Location: ' . BASE_URL . '/admin/umkm'); exit; }
    $judul_halaman = 'Edit UMKM';
    require_once BASE_PATH . '/view/admin/umkm/edit.php';
} elseif ($action === 'tambah') {
    $judul_halaman = 'Tambah UMKM';
    require_once BASE_PATH . '/view/admin/umkm/tambah.php';
} else {
    $semua_umkm = $umkmModel->getAll();
    $judul_halaman = 'Kelola UMKM';
    require_once BASE_PATH . '/view/admin/umkm/index.php';
}
