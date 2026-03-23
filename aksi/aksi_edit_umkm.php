<?php
require_once BASE_PATH . '/model/UMKMModel.php';
require_once BASE_PATH . '/aksi/helper_upload.php';
if (!isset($_SESSION['admin'])) { header('Location: ' . BASE_URL . '/admin/login'); exit; }
$id      = (int)($_POST['id'] ?? 0);
$nama    = trim($_POST['nama_umkm'] ?? '');
$pemilik = trim($_POST['pemilik'] ?? '');
$kat     = $_POST['kategori'] ?? 'lainnya';
$desc    = trim($_POST['deskripsi'] ?? '');
$produk  = trim($_POST['produk_unggulan'] ?? '');
$kontak  = trim($_POST['kontak'] ?? '');
$alamat  = trim($_POST['alamat'] ?? '');
if (!$id || !$nama) {
    $_SESSION['pesan_error'] = 'Data tidak valid.';
    header('Location: ' . BASE_URL . '/admin/umkm'); exit;
}
$foto = uploadFoto('foto', 'umkm');
$m = new UMKMModel($koneksi);
$m->update($id, $nama, $pemilik, $kat, $desc, $produk, $kontak, $alamat, $foto ?: null)
    ? $_SESSION['pesan_sukses'] = 'UMKM berhasil diperbarui!'
    : $_SESSION['pesan_error'] = 'Gagal memperbarui.';
header('Location: ' . BASE_URL . '/admin/umkm'); exit;
