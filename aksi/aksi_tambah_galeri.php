<?php
require_once BASE_PATH . '/model/GaleriModel.php';
require_once BASE_PATH . '/aksi/helper_upload.php';

if (!isset($_SESSION['admin'])) { header('Location: ' . BASE_URL . '/admin/login'); exit; }
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: ' . BASE_URL . '/admin/galeri'); exit; }

$judul     = trim($_POST['judul'] ?? '');
$deskripsi = trim($_POST['deskripsi'] ?? '');
$kategori  = $_POST['kategori'] ?? 'umum';

if (!$judul) {
    $_SESSION['pesan_error'] = 'Judul foto wajib diisi.';
    header('Location: ' . BASE_URL . '/admin/galeri?action=tambah'); exit;
}

$foto = uploadFoto('foto', 'galeri');
if (!$foto) {
    $_SESSION['pesan_error'] = 'Foto wajib diunggah (JPG/PNG/WEBP, maks 5MB).';
    header('Location: ' . BASE_URL . '/admin/galeri?action=tambah'); exit;
}

$model = new GaleriModel($koneksi);
if ($model->tambah($judul, $deskripsi, $foto, $kategori)) {
    $_SESSION['pesan_sukses'] = 'Foto berhasil ditambahkan!';
} else {
    $_SESSION['pesan_error'] = 'Gagal menyimpan data.';
}
header('Location: ' . BASE_URL . '/admin/galeri'); exit;
