<?php
require_once BASE_PATH . '/model/UMKMModel.php';
if (!isset($_SESSION['admin'])) { header('Location: ' . BASE_URL . '/admin/login'); exit; }
$id = (int)($_GET['id'] ?? 0);
if ($id) {
    $m = new UMKMModel($koneksi);
    $m->hapus($id) ? $_SESSION['pesan_sukses'] = 'UMKM dihapus.' : $_SESSION['pesan_error'] = 'Gagal.';
}
header('Location: ' . BASE_URL . '/admin/umkm'); exit;
