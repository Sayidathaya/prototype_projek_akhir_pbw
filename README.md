# 🏡 Kampung Ketupat Warna Warni Samarinda
### Website Informasi & Promosi Wisata UMKM dan Pariwisata

> **Proyek Akhir — Mata Kuliah Pemrograman Berbasis Web**
> Program Studi Sistem Informasi | Fakultas Teknik | Universitas Mulawarman | 2026

---

## 👥 Disusun Oleh — Kelompok 2

| NIM | Nama |
|---|---|
| 2409116006 | Adella Putri |
| 2409116029 | Mochammad Rezky Ramadhan |
| 2409116036 | Sayid Rafi A'Thaya |
| 2409116040 | Dhita Olivia Ramadhayanti Kusuma |

---

## 📌 Deskripsi Proyek

Website ini dikembangkan sebagai media informasi dan promosi digital resmi untuk **Kampung Ketupat Warna Warni Samarinda** — destinasi wisata budaya dan kuliner di tepi Sungai Mahakam, Kecamatan Samarinda Seberang, Kalimantan Timur.

Proyek ini lahir dari hasil wawancara langsung dengan **Bapak Haji Abdul Azis** selaku Ketua Pokdarwis (Kelompok Sadar Wisata), yang menyampaikan permasalahan utama:

- Website resmi sebelumnya sudah tidak aktif sejak 2021
- Informasi kampung wisata sulit ditemukan di internet
- Minimnya SDM bidang TI untuk mengelola konten digital
- Belum ada media promosi digital untuk UMKM lokal warga

**Solusi yang dikembangkan:** Website informasi wisata berbasis PHP + MySQL dengan fitur CRUD admin, Vue.js untuk interaktivitas frontend, dan desain responsif menggunakan Bootstrap 5.

---

## 🛠️ Tech Stack

| Komponen | Teknologi |
|---|---|
| Backend | PHP Native (OOP pada Model, prosedural pada Controller) |
| Database | MySQL (auto-setup via `koneksi.php`) |
| Frontend | Bootstrap 5 (CDN) + Vue.js 3 (CDN) |
| Font | Google Fonts — Playfair Display + Poppins |
| Icons | Bootstrap Icons |
| Maps | Google Maps Embed |
| Local Server | Laragon (Apache + MySQL + PHP) |
| Hosting | GitHub |

---

## 📁 Struktur Folder (MVC)

```
kampung-ketupat-projek-akhir/
│
├── index.php                        ← Router utama (entry point)
├── koneksi.php                      ← Koneksi MySQL + auto-setup DB
├── .htaccess                        ← URL rewriting Apache
├── reset_password.txt               ← Helper reset password (ubah ke .php jika perlu)
│
├── model/
│   ├── AdminModel.php               ← Query autentikasi admin
│   ├── GaleriModel.php              ← Query CRUD galeri wisata
│   ├── EventModel.php               ← Query CRUD event/kalender
│   ├── UMKMModel.php                ← Query CRUD UMKM lokal
│   └── KritikSaranModel.php         ← Query kritik & saran
│
├── controller/
│   ├── BerandaController.php
│   ├── WisataController.php
│   ├── GaleriController.php
│   ├── EventController.php
│   ├── UMKMController.php
│   ├── LokasiController.php
│   ├── KontakController.php
│   ├── KritikSaranController.php
│   ├── AdminController.php          ← Login, dashboard
│   ├── AdminGaleriController.php
│   ├── AdminEventController.php
│   ├── AdminUMKMController.php
│   └── AdminKritikController.php
│
├── view/
│   ├── layout/
│   │   ├── header.php               ← Navbar + head HTML
│   │   └── footer.php               ← Footer + CDN scripts
│   ├── user/
│   │   ├── beranda.php
│   │   ├── detail_wisata.php
│   │   ├── galeri.php
│   │   ├── event.php
│   │   ├── umkm.php
│   │   ├── lokasi.php
│   │   ├── kritik_saran.php
│   │   └── kontak.php
│   └── admin/
│       ├── login.php
│       ├── dashboard.php
│       ├── layout_admin_header.php
│       ├── layout_admin_footer.php
│       ├── galeri/  (index, tambah, edit)
│       ├── event/   (index, tambah, edit)
│       ├── umkm/    (index, tambah, edit)
│       └── kritik_saran/ (index)
│
├── aksi/
│   ├── helper_upload.php            ← Helper upload foto
│   ├── aksi_login.php / aksi_logout.php
│   ├── aksi_kirim_kritik.php
│   ├── aksi_tambah/edit/hapus_galeri.php
│   ├── aksi_tambah/edit/hapus_event.php
│   ├── aksi_tambah/edit/hapus_umkm.php
│   └── aksi_hapus_kritik.php
│
├── assets/
│   ├── css/style.css                ← Custom CSS di atas Bootstrap 5
│   ├── js/main.js                   ← Custom JS + Vue 3 komponen
│   └── uploads/
│       ├── galeri/                  ← Foto galeri yang diupload admin
│       └── umkm/                    ← Foto UMKM yang diupload admin
│
└── database/
    └── kampung_ketupat.sql          ← SQL dump lengkap (opsional)
```

---

## 🗄️ Struktur Database

```
Database: kampung_ketupat (auto-dibuat saat pertama buka website)

Tabel admin        → id, username, password(bcrypt), nama_lengkap, created_at
Tabel galeri       → id, judul, deskripsi, foto, kategori, created_at
Tabel event        → id, nama_event, deskripsi, tanggal_mulai, tanggal_selesai,
                     lokasi, foto, status, created_at
Tabel umkm         → id, nama_umkm, pemilik, kategori, deskripsi,
                     produk_unggulan, kontak, alamat, foto, created_at
Tabel kritik_saran → id, nama_pengunjung, email, jenis, pesan, sudah_dibaca, created_at
```

---

## 🚀 Cara Menjalankan

### Prasyarat
- **Laragon** sudah terinstall ([laragon.org](https://laragon.org))
- Apache dan MySQL aktif di Laragon

### Langkah Setup

**1. Letakkan folder project**
```
Salin/extract folder ke:
C:\laragon\www\kampung-ketupat-projek-akhir\
```

**2. Pastikan Laragon aktif**
- Buka Laragon → klik **Start All**
- Status Apache dan MySQL harus hijau ✅

**3. Cek konfigurasi database** *(jika perlu)*

Buka `koneksi.php`, sesuaikan baris berikut:
```php
define('DB_USER', 'root');  // default Laragon: root
define('DB_PASS', '');      // default Laragon: kosong
```

**4. Buka website di browser**
```
http://localhost/kampung-ketupat-projek-akhir
```
> ✅ Database, tabel, dan data awal **otomatis dibuat** — tidak perlu import SQL manual.

---

## 🌐 Daftar URL

| Halaman | URL |
|---|---|
| Beranda | `http://localhost/kampung-ketupat-projek-akhir` |
| Detail Wisata | `http://localhost/kampung-ketupat-projek-akhir/wisata` |
| Galeri | `http://localhost/kampung-ketupat-projek-akhir/galeri` |
| Kalender Event | `http://localhost/kampung-ketupat-projek-akhir/event` |
| UMKM Lokal | `http://localhost/kampung-ketupat-projek-akhir/umkm` |
| Lokasi | `http://localhost/kampung-ketupat-projek-akhir/lokasi` |
| Kritik & Saran | `http://localhost/kampung-ketupat-projek-akhir/kritik-saran` |
| Kontak | `http://localhost/kampung-ketupat-projek-akhir/kontak` |
| **Login Admin** | `http://localhost/kampung-ketupat-projek-akhir/admin/login` |
| **Dashboard Admin** | `http://localhost/kampung-ketupat-projek-akhir/admin/dashboard` |
| Kelola Galeri | `http://localhost/kampung-ketupat-projek-akhir/admin/galeri` |
| Kelola Event | `http://localhost/kampung-ketupat-projek-akhir/admin/event` |
| Kelola UMKM | `http://localhost/kampung-ketupat-projek-akhir/admin/umkm` |
| Kelola Kritik Saran | `http://localhost/kampung-ketupat-projek-akhir/admin/kritik-saran` |

---

## 📋 Fitur Lengkap

### 👤 Fitur Pengunjung (Tanpa Login)

| Halaman | Fitur |
|---|---|
| **Beranda** | Hero section, info cepat (jam buka, tiket gratis, WiFi), Tentang Kampung, Tourism Highlights, preview Galeri + Event + UMKM |
| **Detail Wisata** | Deskripsi lengkap, jam buka 08.30–17.30 WITA, tiket gratis, 12 fasilitas, 6 aktivitas wisata |
| **Galeri** | Grid foto dari database, filter kategori real-time (Vue.js): Semua / Wisata / Kuliner / Budaya / Fasilitas |
| **Kalender Event** | Daftar event, filter status real-time (Vue.js): Semua / Akan Datang / Berlangsung / Selesai |
| **UMKM Lokal** | Katalog UMKM warga, pencarian nama + filter kategori real-time (Vue.js), tombol Hubungi |
| **Lokasi** | Google Maps embed interaktif, info alamat lengkap, tombol buka Google Maps |
| **Kritik & Saran** | Form dengan live validation (Vue.js), data tersimpan ke database |
| **Kontak** | Info kontak Pokdarwis, media sosial resmi kampung |

### 🔐 Fitur Admin (Butuh Login)

| Modul | Fitur |
|---|---|
| **Login / Logout** | Autentikasi session PHP, `password_verify()` bcrypt, destroy session |
| **Dashboard** | Statistik: total galeri, event aktif, UMKM, pesan belum dibaca; tabel 5 pesan terbaru |
| **CRUD Galeri** | Tambah foto (upload JPG/PNG/WEBP maks 5MB), edit judul/kategori/deskripsi, hapus foto + file fisik |
| **CRUD Event** | Tambah/edit/hapus event dengan nama, deskripsi, tanggal, lokasi, status, foto |
| **CRUD UMKM** | Tambah/edit/hapus UMKM dengan nama, pemilik, kategori, produk unggulan, kontak, alamat, foto |
| **Kritik & Saran** | Lihat semua pesan masuk (badge "Baru" untuk belum dibaca), hapus pesan |

---

## 🔑 Akun Admin Default

```
Username : admin
Password : admin123
```

> ⚠️ **Jika login gagal** (muncul "username atau password salah"):
> 1. Ubah file `reset_password.txt` → `reset_password.php`
> 2. Buka `http://localhost/kampung-ketupat-projek-akhir/reset_password.php`
> 3. Tunggu muncul pesan hijau ✅
> 4. Login kembali dengan `admin` / `admin123`
> 5. **Hapus** atau kembalikan nama file ke `.txt` setelah selesai

---

## 📖 Panduan Penggunaan Singkat

### Sebagai Pengunjung
1. Buka `http://localhost/kampung-ketupat-projek-akhir`
2. Jelajahi menu di navbar: Beranda → Detail Wisata → Galeri → Event → UMKM → Lokasi → Kontak
3. Di halaman **Galeri**, klik tombol kategori untuk filter foto
4. Di halaman **Event**, klik tombol status untuk filter event
5. Di halaman **UMKM**, ketik di kolom pencarian atau pilih kategori untuk mencari usaha
6. Di halaman **Kritik & Saran**, isi form dan klik **Kirim Pesan** untuk mengirim masukan

### Sebagai Admin
1. Buka `http://localhost/kampung-ketupat-projek-akhir/admin/login`
2. Masukkan username `admin` dan password `admin123` → klik **Masuk**
3. Gunakan **sidebar kiri** untuk navigasi antar modul
4. Di setiap halaman kelola, klik **+ Tambah** untuk menambah data baru
5. Klik ikon ✏️ untuk edit, ikon 🗑️ untuk hapus (ada konfirmasi sebelum hapus)
6. Klik **Logout** di sidebar bawah untuk keluar

---

## ❓ Troubleshooting

| Masalah | Solusi |
|---|---|
| Halaman tidak bisa dibuka | Buka Laragon → klik **Start All**, pastikan Apache & MySQL hijau |
| Halaman error merah (tabel tidak ada) | Buka `http://localhost/kampung-ketupat-projek-akhir` sekali — database otomatis dibuat |
| Login admin gagal | Ubah `reset_password.txt` → `.php`, jalankan, lalu kembalikan ke `.txt` |
| Langsung masuk dashboard saat buka login | Normal — session masih aktif. Buka `/admin/logout` dulu jika ingin test ulang |
| Foto tidak tampil setelah upload | Pastikan folder `assets/uploads/galeri/` dan `assets/uploads/umkm/` ada dan dapat ditulis |
| Google Maps tidak muncul | Butuh koneksi internet aktif |
| URL tidak dikenali / error 404 | Pastikan `mod_rewrite` Apache aktif di Laragon (default sudah aktif) |

---

## 📍 Informasi Mitra

| | |
|---|---|
| **Nama Wisata** | Kampung Ketupat Warna Warni Samarinda |
| **Alamat** | Jl. Mangkupalas, Kel. Mesjid, Kec. Samarinda Seberang, Kota Samarinda, Kaltim 75251 |
| **Pengelola** | Pokdarwis (Kelompok Sadar Wisata) Kampung Ketupat |
| **Ketua Pokdarwis** | Bapak Haji Abdul Azis |
| **Jam Buka** | Setiap hari, 08.30 – 17.30 WITA |
| **Tiket Masuk** | Gratis (beberapa paket edukasi berbayar) |


---

*© 2026 Kampung Ketupat Warna Warni Samarinda — Kelompok 2, Sistem Informasi, Universitas Mulawarman*
