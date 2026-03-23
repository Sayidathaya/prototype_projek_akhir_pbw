<?php
if (!isset($_SESSION['admin'])) { header('Location: ' . BASE_URL . '/admin/login'); exit; }

require_once BASE_PATH . '/model/KritikSaranModel.php';
$kritikModel = new KritikSaranModel($koneksi);

// Tandai semua sebagai dibaca saat admin buka halaman
$semua_pesan = $kritikModel->getAll();

$pesan_sukses = $_SESSION['pesan_sukses'] ?? null;
unset($_SESSION['pesan_sukses']);

$judul_halaman = 'Kelola Kritik & Saran';
require_once BASE_PATH . '/view/admin/kritik_saran/index.php';
