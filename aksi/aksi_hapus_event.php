<?php
require_once BASE_PATH . '/model/EventModel.php';
if (!isset($_SESSION['admin'])) { header('Location: ' . BASE_URL . '/admin/login'); exit; }
$id = (int)($_GET['id'] ?? 0);
if ($id) {
    $m = new EventModel($koneksi);
    $m->hapus($id) ? $_SESSION['pesan_sukses'] = 'Event dihapus.' : $_SESSION['pesan_error'] = 'Gagal.';
}
header('Location: ' . BASE_URL . '/admin/event'); exit;
