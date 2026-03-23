<?php
// ============================================================
// FILE: controller/UMKMController.php
// ============================================================
require_once BASE_PATH . '/model/UMKMModel.php';

$umkmModel  = new UMKMModel($koneksi);
$semua_umkm = $umkmModel->getAll();

$judul_halaman = 'UMKM Lokal — Kampung Ketupat Warna Warni';
$halaman_aktif = 'umkm';

require_once BASE_PATH . '/view/user/umkm.php';
