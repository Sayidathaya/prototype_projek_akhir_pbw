<?php
require_once BASE_PATH . '/model/GaleriModel.php';
if (!isset($_SESSION['admin'])) { header('Location: ' . BASE_URL . '/admin/login'); exit; }
$id = (int)($_GET['id'] ?? 0);
if ($id) {
    $model = new GaleriModel($koneksi);
    $model->hapus($id) ? $_SESSION['pesan_sukses'] = 'Foto berhasil dihapus.' : $_SESSION['pesan_error'] = 'Gagal menghapus.';
}
header('Location: ' . BASE_URL . '/admin/galeri'); exit;
