<?php
// ============================================================
// FILE: controller/GaleriController.php
// ============================================================
require_once BASE_PATH . '/model/GaleriModel.php';

$galeriModel = new GaleriModel($koneksi);
$semua_galeri = $galeriModel->getAll();

$judul_halaman = 'Galeri Wisata — Kampung Ketupat Warna Warni';
$halaman_aktif = 'galeri';

require_once BASE_PATH . '/view/user/galeri.php';
