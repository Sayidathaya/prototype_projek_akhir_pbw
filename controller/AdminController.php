<?php
// ============================================================
// FILE: controller/AdminController.php
// Controller untuk login admin & dashboard
// ============================================================

require_once BASE_PATH . '/model/AdminModel.php';
require_once BASE_PATH . '/model/GaleriModel.php';
require_once BASE_PATH . '/model/EventModel.php';
require_once BASE_PATH . '/model/UMKMModel.php';
require_once BASE_PATH . '/model/KritikSaranModel.php';

$path = trim(str_replace(BASE_URL, '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)), '/');

// Halaman login
if ($path === 'admin/login' || $path === 'admin') {
    // Jika sudah login, redirect ke dashboard
    if (isset($_SESSION['admin'])) {
        header('Location: ' . BASE_URL . '/admin/dashboard');
        exit;
    }
    $pesan_error = $_SESSION['login_error'] ?? null;
    unset($_SESSION['login_error']);
    $judul_halaman = 'Login Admin — Kampung Ketupat';
    require_once BASE_PATH . '/view/admin/login.php';
    exit;
}

// Semua halaman admin selain login wajib session
if (!isset($_SESSION['admin'])) {
    header('Location: ' . BASE_URL . '/admin/login');
    exit;
}

// Dashboard
$galeriModel  = new GaleriModel($koneksi);
$eventModel   = new EventModel($koneksi);
$umkmModel    = new UMKMModel($koneksi);
$kritikModel  = new KritikSaranModel($koneksi);

$stats = [
    'galeri'   => $galeriModel->countAll(),
    'event'    => $eventModel->countAll(),
    'umkm'     => $umkmModel->countAll(),
    'kritik'   => $kritikModel->countBelumDibaca(),
];

$pesan_terbaru = $kritikModel->getAll();
$pesan_terbaru = array_slice($pesan_terbaru, 0, 5);

$judul_halaman = 'Dashboard Admin — Kampung Ketupat';
require_once BASE_PATH . '/view/admin/dashboard.php';
