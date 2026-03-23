<?php
$pesan_sukses = $_SESSION['pesan_sukses'] ?? null;
$pesan_error  = $_SESSION['pesan_error'] ?? null;
unset($_SESSION['pesan_sukses'], $_SESSION['pesan_error']);

$judul_halaman = 'Kritik & Saran — Kampung Ketupat Warna Warni';
$halaman_aktif = 'kritik';
require_once BASE_PATH . '/view/user/kritik_saran.php';
