<?php
require_once BASE_PATH . '/model/KritikSaranModel.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . BASE_URL . '/kritik-saran'); exit;
}

$nama  = trim($_POST['nama'] ?? '');
$email = trim($_POST['email'] ?? '');
$jenis = $_POST['jenis'] ?? 'saran';
$pesan = trim($_POST['pesan'] ?? '');

$jenis_valid = ['kritik','saran','pertanyaan','apresiasi'];

if (!$nama || !$pesan || !in_array($jenis, $jenis_valid)) {
    $_SESSION['pesan_error'] = 'Nama dan pesan wajib diisi.';
    header('Location: ' . BASE_URL . '/kritik-saran'); exit;
}
if (strlen($pesan) < 10) {
    $_SESSION['pesan_error'] = 'Pesan minimal 10 karakter.';
    header('Location: ' . BASE_URL . '/kritik-saran'); exit;
}

$model = new KritikSaranModel($koneksi);
if ($model->simpan($nama, $email, $jenis, $pesan)) {
    $_SESSION['pesan_sukses'] = 'Terima kasih! Pesan Anda telah terkirim.';
} else {
    $_SESSION['pesan_error'] = 'Gagal mengirim pesan. Silakan coba lagi.';
}
header('Location: ' . BASE_URL . '/kritik-saran'); exit;
