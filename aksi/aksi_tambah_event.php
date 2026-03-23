<?php
require_once BASE_PATH . '/model/EventModel.php';
require_once BASE_PATH . '/aksi/helper_upload.php';
if (!isset($_SESSION['admin'])) { header('Location: ' . BASE_URL . '/admin/login'); exit; }
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: ' . BASE_URL . '/admin/event'); exit; }
$nama   = trim($_POST['nama_event'] ?? '');
$desc   = trim($_POST['deskripsi'] ?? '');
$tgl1   = $_POST['tanggal_mulai'] ?? '';
$tgl2   = $_POST['tanggal_selesai'] ?? '';
$lok    = $_POST['lokasi'] ?? 'Kampung Ketupat';
$status = $_POST['status'] ?? 'akan_datang';
if (!$nama || !$tgl1) {
    $_SESSION['pesan_error'] = 'Nama event dan tanggal wajib diisi.';
    header('Location: ' . BASE_URL . '/admin/event?action=tambah'); exit;
}
$foto = uploadFoto('foto', 'galeri') ?: '';
$m = new EventModel($koneksi);
$m->tambah($nama, $desc, $tgl1, $tgl2, $lok, $foto, $status)
    ? $_SESSION['pesan_sukses'] = 'Event berhasil ditambahkan!'
    : $_SESSION['pesan_error'] = 'Gagal menyimpan.';
header('Location: ' . BASE_URL . '/admin/event'); exit;
