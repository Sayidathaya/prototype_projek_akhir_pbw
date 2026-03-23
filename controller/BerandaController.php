<?php
// ============================================================
// FILE: controller/BerandaController.php
// Controller untuk halaman beranda (homepage)
// ============================================================

require_once BASE_PATH . '/model/GaleriModel.php';
require_once BASE_PATH . '/model/EventModel.php';
require_once BASE_PATH . '/model/UMKMModel.php';

$galeriModel = new GaleriModel($koneksi);
$eventModel  = new EventModel($koneksi);
$umkmModel   = new UMKMModel($koneksi);

// Ambil data untuk beranda
$galeri_preview = array_slice($galeriModel->getAll(), 0, 6);
$event_preview  = $eventModel->getAkanDatang();
$umkm_preview   = array_slice($umkmModel->getAll(), 0, 4);

$judul_halaman = 'Beranda — Kampung Ketupat Warna Warni Samarinda';
$halaman_aktif = 'beranda';

require_once BASE_PATH . '/view/user/beranda.php';
