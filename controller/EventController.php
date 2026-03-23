<?php
// ============================================================
// FILE: controller/EventController.php
// ============================================================
require_once BASE_PATH . '/model/EventModel.php';

$eventModel  = new EventModel($koneksi);
$semua_event = $eventModel->getAll();

$judul_halaman = 'Kalender Event — Kampung Ketupat Warna Warni';
$halaman_aktif = 'event';

require_once BASE_PATH . '/view/user/event.php';
