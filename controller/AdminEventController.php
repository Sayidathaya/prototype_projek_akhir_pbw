<?php
// ============================================================
// FILE: controller/AdminEventController.php
// ============================================================
if (!isset($_SESSION['admin'])) { header('Location: ' . BASE_URL . '/admin/login'); exit; }

require_once BASE_PATH . '/model/EventModel.php';
$eventModel = new EventModel($koneksi);

$action = $_GET['action'] ?? 'index';
$id     = (int)($_GET['id'] ?? 0);
$pesan_sukses = $_SESSION['pesan_sukses'] ?? null;
$pesan_error  = $_SESSION['pesan_error'] ?? null;
unset($_SESSION['pesan_sukses'], $_SESSION['pesan_error']);

if ($action === 'edit' && $id) {
    $data_event = $eventModel->getById($id);
    if (!$data_event) { header('Location: ' . BASE_URL . '/admin/event'); exit; }
    $judul_halaman = 'Edit Event';
    require_once BASE_PATH . '/view/admin/event/edit.php';
} elseif ($action === 'tambah') {
    $judul_halaman = 'Tambah Event';
    require_once BASE_PATH . '/view/admin/event/tambah.php';
} else {
    $semua_event = $eventModel->getAll();
    $judul_halaman = 'Kelola Event';
    require_once BASE_PATH . '/view/admin/event/index.php';
}
