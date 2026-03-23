<?php
// ============================================================
// FILE: controller/AdminGaleriController.php
// ============================================================
if (!isset($_SESSION['admin'])) { header('Location: ' . BASE_URL . '/admin/login'); exit; }

require_once BASE_PATH . '/model/GaleriModel.php';
$galeriModel = new GaleriModel($koneksi);

$action = $_GET['action'] ?? 'index';
$id     = (int)($_GET['id'] ?? 0);

$pesan_sukses = $_SESSION['pesan_sukses'] ?? null;
$pesan_error  = $_SESSION['pesan_error'] ?? null;
unset($_SESSION['pesan_sukses'], $_SESSION['pesan_error']);

if ($action === 'edit' && $id) {
    $data_galeri = $galeriModel->getById($id);
    if (!$data_galeri) { header('Location: ' . BASE_URL . '/admin/galeri'); exit; }
    $judul_halaman = 'Edit Galeri';
    require_once BASE_PATH . '/view/admin/galeri/edit.php';
} elseif ($action === 'tambah') {
    $judul_halaman = 'Tambah Galeri';
    require_once BASE_PATH . '/view/admin/galeri/tambah.php';
} else {
    $semua_galeri = $galeriModel->getAll();
    $judul_halaman = 'Kelola Galeri';
    require_once BASE_PATH . '/view/admin/galeri/index.php';
}
