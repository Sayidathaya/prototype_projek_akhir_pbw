<?php
require_once BASE_PATH . '/model/GaleriModel.php';
require_once BASE_PATH . '/aksi/helper_upload.php';

if (!isset($_SESSION['admin'])) { header('Location: ' . BASE_URL . '/admin/login'); exit; }
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: ' . BASE_URL . '/admin/galeri'); exit; }

$id        = (int)($_POST['id'] ?? 0);
$judul     = trim($_POST['judul'] ?? '');
$deskripsi = trim($_POST['deskripsi'] ?? '');
$kategori  = $_POST['kategori'] ?? 'umum';

if (!$id || !$judul) {
    $_SESSION['pesan_error'] = 'Data tidak valid.';
    header('Location: ' . BASE_URL . '/admin/galeri'); exit;
}

$foto = uploadFoto('foto', 'galeri');
$model = new GaleriModel($koneksi);
if ($model->update($id, $judul, $deskripsi, $kategori, $foto ?: null)) {
    $_SESSION['pesan_sukses'] = 'Data galeri berhasil diperbarui!';
} else {
    $_SESSION['pesan_error'] = 'Gagal memperbarui data.';
}
header('Location: ' . BASE_URL . '/admin/galeri'); exit;
