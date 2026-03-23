<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $judul_halaman ?? 'Admin' ?> — Kampung Ketupat</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css" />
</head>
<body style="padding-top:0;">

<!-- SIDEBAR -->
<nav class="sidebar-admin">
  <div class="sidebar-brand">
    🏡 Kampung Ketupat<br>
    <small style="font-family:'Poppins';font-size:.75rem;opacity:.7;">Panel Admin</small>
  </div>
  <ul class="sidebar-nav nav flex-column">
    <li class="nav-item">
      <a class="nav-link <?= ($menu_aktif??'')==='dashboard'?'active':'' ?>" href="<?= BASE_URL ?>/admin/dashboard">
        <i class="bi bi-speedometer2"></i> Dashboard
      </a>
    </li>
    <li class="nav-item mt-2">
      <small style="color:rgba(255,255,255,.4);font-size:.72rem;padding:4px 24px;display:block;text-transform:uppercase;letter-spacing:.5px;">Kelola Konten</small>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= ($menu_aktif??'')==='galeri'?'active':'' ?>" href="<?= BASE_URL ?>/admin/galeri">
        <i class="bi bi-images"></i> Galeri Wisata
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= ($menu_aktif??'')==='event'?'active':'' ?>" href="<?= BASE_URL ?>/admin/event">
        <i class="bi bi-calendar-event"></i> Event / Kalender
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= ($menu_aktif??'')==='umkm'?'active':'' ?>" href="<?= BASE_URL ?>/admin/umkm">
        <i class="bi bi-shop"></i> UMKM Lokal
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= ($menu_aktif??'')==='kritik'?'active':'' ?>" href="<?= BASE_URL ?>/admin/kritik-saran">
        <i class="bi bi-chat-heart"></i> Kritik & Saran
      </a>
    </li>
    <li class="nav-item mt-3">
      <a class="nav-link" href="<?= BASE_URL ?>" target="_blank">
        <i class="bi bi-globe"></i> Lihat Website
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= BASE_URL ?>/admin/logout" onclick="return confirm('Yakin ingin keluar?')">
        <i class="bi bi-box-arrow-left"></i> Logout
      </a>
    </li>
  </ul>
</nav>
<!-- END SIDEBAR -->

<div class="admin-main">
  <!-- Topbar -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-bold mb-0" style="color:var(--kk-dark);"><?= $judul_halaman ?? 'Dashboard' ?></h5>
    <div class="text-muted small">
      <i class="bi bi-person-circle me-1"></i>
      <?= htmlspecialchars($_SESSION['admin']['nama'] ?? 'Admin') ?>
    </div>
  </div>
