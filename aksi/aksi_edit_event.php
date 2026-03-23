<?php
require_once BASE_PATH . '/model/EventModel.php';
require_once BASE_PATH . '/aksi/helper_upload.php';
if (!isset($_SESSION['admin'])) { header('Location: ' . BASE_URL . '/admin/login'); exit; }
$id     = (int)($_POST['id'] ?? 0);
$nama   = trim($_POST['nama_event'] ?? '');
$desc   = trim($_POST['deskripsi'] ?? '');
$tgl1   = $_POST['tanggal_mulai'] ?? '';
$tgl2   = $_POST['tanggal_selesai'] ?? '';
$lok    = $_POST['lokasi'] ?? '';
$status = $_POST['status'] ?? 'akan_datang';
if (!$id || !$nama) {
    $_SESSION['pesan_error'] = 'Data tidak valid.';
    header('Location: ' . BASE_URL . '/admin/event'); exit;
}
$foto = uploadFoto('foto', 'galeri');
$m = new EventModel($koneksi);
$m->update($id, $nama, $desc, $tgl1, $tgl2, $lok, $status, $foto ?: null)
    ? $_SESSION['pesan_sukses'] = 'Event berhasil diperbarui!'
    : $_SESSION['pesan_error'] = 'Gagal memperbarui.';
header('Location: ' . BASE_URL . '/admin/event'); exit;
