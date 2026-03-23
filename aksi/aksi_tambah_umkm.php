<?php
require_once BASE_PATH . '/model/UMKMModel.php';
require_once BASE_PATH . '/aksi/helper_upload.php';
if (!isset($_SESSION['admin'])) { header('Location: ' . BASE_URL . '/admin/login'); exit; }
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: ' . BASE_URL . '/admin/umkm'); exit; }
$nama    = trim($_POST['nama_umkm'] ?? '');
$pemilik = trim($_POST['pemilik'] ?? '');
$kat     = $_POST['kategori'] ?? 'lainnya';
$desc    = trim($_POST['deskripsi'] ?? '');
$produk  = trim($_POST['produk_unggulan'] ?? '');
$kontak  = trim($_POST['kontak'] ?? '');
$alamat  = trim($_POST['alamat'] ?? '');
if (!$nama) {
    $_SESSION['pesan_error'] = 'Nama UMKM wajib diisi.';
    header('Location: ' . BASE_URL . '/admin/umkm?action=tambah'); exit;
}
$foto = uploadFoto('foto', 'umkm') ?: '';
$m = new UMKMModel($koneksi);
$m->tambah($nama, $pemilik, $kat, $desc, $produk, $kontak, $alamat, $foto)
    ? $_SESSION['pesan_sukses'] = 'UMKM berhasil ditambahkan!'
    : $_SESSION['pesan_error'] = 'Gagal menyimpan.';
header('Location: ' . BASE_URL . '/admin/umkm'); exit;
