<?php
// ============================================================
// FILE: index.php — Router utama Kampung Ketupat Warna Warni
// ============================================================

// Session hanya start sekali di sini
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Konstanta global
define('BASE_URL',  '/kampung-ketupat-projek-akhir');
define('BASE_PATH', __DIR__);

// Koneksi + auto-setup database (tabel + seed)
require_once BASE_PATH . '/koneksi.php';

// ===== ROUTER =====
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = str_replace(BASE_URL, '', $path);
$path = trim($path, '/');

switch ($path) {

    // ===== USER PAGES =====
    case '':
    case 'beranda':
        require_once BASE_PATH . '/controller/BerandaController.php';
        break;
    case 'wisata':
        require_once BASE_PATH . '/controller/WisataController.php';
        break;
    case 'galeri':
        require_once BASE_PATH . '/controller/GaleriController.php';
        break;
    case 'event':
        require_once BASE_PATH . '/controller/EventController.php';
        break;
    case 'umkm':
        require_once BASE_PATH . '/controller/UMKMController.php';
        break;
    case 'lokasi':
        require_once BASE_PATH . '/controller/LokasiController.php';
        break;
    case 'kontak':
        require_once BASE_PATH . '/controller/KontakController.php';
        break;
    case 'kritik-saran':
        require_once BASE_PATH . '/controller/KritikSaranController.php';
        break;

    // ===== ADMIN PAGES =====
    case 'admin':
    case 'admin/login':
    case 'admin/dashboard':
        require_once BASE_PATH . '/controller/AdminController.php';
        break;
    case 'admin/logout':
        require_once BASE_PATH . '/aksi/aksi_logout.php';
        break;
    case 'admin/galeri':
        require_once BASE_PATH . '/controller/AdminGaleriController.php';
        break;
    case 'admin/event':
        require_once BASE_PATH . '/controller/AdminEventController.php';
        break;
    case 'admin/umkm':
        require_once BASE_PATH . '/controller/AdminUMKMController.php';
        break;
    case 'admin/kritik-saran':
        require_once BASE_PATH . '/controller/AdminKritikController.php';
        break;

    // ===== AKSI (POST/GET HANDLERS) =====
    case 'aksi/login':
        require_once BASE_PATH . '/aksi/aksi_login.php';
        break;
    case 'aksi/logout':
        require_once BASE_PATH . '/aksi/aksi_logout.php';
        break;
    case 'aksi/kirim-kritik':
        require_once BASE_PATH . '/aksi/aksi_kirim_kritik.php';
        break;
    case 'aksi/tambah-galeri':
        require_once BASE_PATH . '/aksi/aksi_tambah_galeri.php';
        break;
    case 'aksi/edit-galeri':
        require_once BASE_PATH . '/aksi/aksi_edit_galeri.php';
        break;
    case 'aksi/hapus-galeri':
        require_once BASE_PATH . '/aksi/aksi_hapus_galeri.php';
        break;
    case 'aksi/tambah-event':
        require_once BASE_PATH . '/aksi/aksi_tambah_event.php';
        break;
    case 'aksi/edit-event':
        require_once BASE_PATH . '/aksi/aksi_edit_event.php';
        break;
    case 'aksi/hapus-event':
        require_once BASE_PATH . '/aksi/aksi_hapus_event.php';
        break;
    case 'aksi/tambah-umkm':
        require_once BASE_PATH . '/aksi/aksi_tambah_umkm.php';
        break;
    case 'aksi/edit-umkm':
        require_once BASE_PATH . '/aksi/aksi_edit_umkm.php';
        break;
    case 'aksi/hapus-umkm':
        require_once BASE_PATH . '/aksi/aksi_hapus_umkm.php';
        break;
    case 'aksi/hapus-kritik':
        require_once BASE_PATH . '/aksi/aksi_hapus_kritik.php';
        break;

    // ===== 404 =====
    default:
        http_response_code(404);
        $judul_halaman = '404 — Halaman Tidak Ditemukan';
        require_once BASE_PATH . '/view/layout/header.php';
        echo '
        <div class="container section-kk text-center">
            <h1 style="font-size:6rem;color:var(--kk-primary);font-family:var(--font-display);">404</h1>
            <h3 class="mb-3">Halaman tidak ditemukan</h3>
            <p class="text-muted mb-4">Halaman yang Anda cari tidak tersedia.</p>
            <a href="' . BASE_URL . '" class="btn btn-kk">← Kembali ke Beranda</a>
        </div>';
        require_once BASE_PATH . '/view/layout/footer.php';
        break;
}
