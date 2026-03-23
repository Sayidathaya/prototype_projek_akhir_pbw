# 🏡 Kampung Ketupat Warna Warni Samarinda
### Website Informasi & Promosi Wisata UMKM dan Pariwisata

> Proyek Akhir Mata Kuliah **Pemrograman Berbasis Web**  
> Program Studi Sistem Informasi — Fakultas Teknik  
> Universitas Mulawarman, Samarinda — 2026

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

Website ini dikembangkan sebagai media informasi dan promosi digital untuk **Kampung Ketupat Warna Warni Samarinda**, sebuah destinasi wisata budaya dan kuliner yang terletak di tepi Sungai Mahakam, Kecamatan Samarinda Seberang, Kalimantan Timur.

Proyek ini lahir dari hasil wawancara langsung dengan **Bapak Haji Abdul Azis** selaku Ketua Pokdarwis (Kelompok Sadar Wisata) Kampung Ketupat, yang menyampaikan kebutuhan utama berupa:
- Website resmi yang sebelumnya sudah tidak aktif sejak 2021
- Sulitnya masyarakat menemukan informasi kampung wisata ini di internet
- Minimnya SDM di bidang TI untuk mengelola konten digital
- Perlunya media promosi untuk UMKM lokal warga kampung

---

## 🛠️ Tech Stack

| Komponen | Teknologi |
|---|---|
| Backend | PHP Native (OOP — Model, procedural Controller) |
| Database | MySQL |
| Frontend | Bootstrap 5 (CDN) + Vue.js 3 (CDN) |
| Font | Google Fonts — Playfair Display + Poppins |
| Icons | Bootstrap Icons |
| Maps | Google Maps Embed API |
| Editor | VS Code + Ekstensi Figma |
| Local Server | Laragon (Apache + MySQL + PHP) |
| Hosting | GitHub |

---

## 📋 Fitur Lengkap

### 👤 Fitur Pengunjung (User)

| Halaman | File | Fitur |
|---|---|---|
| Beranda | `view/user/beranda.php` | Hero section, tagline, CTA, Tentang, Tourism Highlights, preview Galeri, Event, UMKM |
| Detail Wisata | `view/user/detail_wisata.php` | Info lengkap, jam buka, tiket, fasilitas (parkir, toilet, musholla, WiFi, homestay, dll), aktivitas wisata |
| Galeri | `view/user/galeri.php` | Grid foto dinamis dari DB, filter kategori (Vue.js) |
| Kalender Event | `view/user/event.php` | Daftar event mendatang, filter status (Vue.js) |
| UMKM Lokal | `view/user/umkm.php` | Katalog UMKM warga, search & filter kategori (Vue.js) |
| Lokasi | `view/user/lokasi.php` | Google Maps embed + info lengkap alamat & jam buka |
| Kritik & Saran | `view/user/kritik_saran.php` | Form input pengunjung dengan live validation (Vue.js), data tersimpan ke DB |
| Kontak | `view/user/kontak.php` | Info kontak Pokdarwis & media sosial resmi kampung |

### 🔐 Fitur Admin (Memerlukan Login)

| File/Modul | Fitur |
|---|---|
| `view/admin/login.php` + `aksi/aksi_login.php` | Login Admin — autentikasi session PHP, validasi `password_verify()` |
| `aksi/aksi_logout.php` | Logout — destroy session, redirect ke halaman login |
| `view/admin/dashboard.php` | Dashboard — ringkasan statistik galeri, event aktif, UMKM, pesan belum dibaca |
| **CRUD Galeri** | Tambah / Edit / Hapus foto — upload file ke `assets/uploads/galeri/`, validasi format & ukuran |
| **CRUD Event** | Tambah / Edit / Hapus event — nama, deskripsi, tanggal mulai/selesai, lokasi, status, foto |
| **CRUD UMKM** | Tambah / Edit / Hapus UMKM — nama usaha, pemilik, kategori, produk unggulan, kontak, alamat, foto |
| **Kelola Kritik & Saran** | Lihat semua pesan masuk dari pengunjung, hapus pesan yang tidak relevan |

### ⚙️ Fitur Teknis Wajib

| Aspek | Implementasi |
|---|---|
| Backend | PHP native — OOP pada layer Model, prosedural pada Controller & Aksi |
| Database | MySQL via `koneksi.php` (mysqli), di-`require_once` di setiap Controller |
| Session & Auth | `session_start()` di `index.php`, cek `$_SESSION['admin']` di setiap halaman admin |
| Struktur MVC | Folder `model/`, `view/`, `controller/`, file `aksi/` untuk proses POST form |
| Frontend | Bootstrap 5 (CDN) + Vue.js 3 (CDN) untuk komponen interaktif |
| Vue.js | Filter galeri, filter event, search UMKM, live form validation kritik saran |
| Figma | Desain mockup dibuat di Figma via ekstensi VS Code |
| Hosting | GitHub (repository) |
| Penamaan File | Konsisten: `index.php`, `login.php`, `aksi_tambah.php`, `aksi_edit.php`, `aksi_hapus.php` |
| Koneksi DB | `koneksi.php` di root — auto create database, tabel, dan seed data awal |

---

## 📁 Struktur Folder (MVC)

```
kampung-ketupat/
│
├── index.php                          ← Router utama (entry point)
├── koneksi.php                        ← Koneksi MySQL (auto-setup DB)
├── .htaccess                          ← URL rewriting Apache
├── README.md                          ← Dokumentasi proyek ini
│
├── model/
│   ├── AdminModel.php                 ← Query autentikasi admin
│   ├── GaleriModel.php                ← Query CRUD galeri wisata
│   ├── EventModel.php                 ← Query CRUD event/kalender
│   ├── UMKMModel.php                  ← Query CRUD UMKM lokal
│   └── KritikSaranModel.php           ← Query kritik & saran
│
├── controller/
│   ├── BerandaController.php          ← Logika halaman beranda
│   ├── WisataController.php           ← Logika detail wisata
│   ├── GaleriController.php           ← Logika halaman galeri
│   ├── EventController.php            ← Logika kalender event
│   ├── UMKMController.php             ← Logika halaman UMKM
│   ├── LokasiController.php           ← Logika halaman lokasi
│   ├── KontakController.php           ← Logika halaman kontak
│   ├── KritikSaranController.php      ← Logika kritik & saran
│   ├── AdminController.php            ← Login, logout, dashboard
│   ├── AdminGaleriController.php      ← CRUD galeri (admin)
│   ├── AdminEventController.php       ← CRUD event (admin)
│   ├── AdminUMKMController.php        ← CRUD UMKM (admin)
│   └── AdminKritikController.php      ← Kelola kritik saran (admin)
│
├── view/
│   ├── layout/
│   │   ├── header.php                 ← Navbar & head HTML
│   │   └── footer.php                 ← Footer + script JS
│   ├── user/
│   │   ├── beranda.php
│   │   ├── detail_wisata.php
│   │   ├── galeri.php
│   │   ├── event.php
│   │   ├── umkm.php
│   │   ├── lokasi.php
│   │   ├── kontak.php
│   │   └── kritik_saran.php
│   └── admin/
│       ├── login.php
│       ├── dashboard.php
│       ├── layout_admin_header.php
│       ├── layout_admin_footer.php
│       ├── galeri/   (index, tambah, edit)
│       ├── event/    (index, tambah, edit)
│       ├── umkm/     (index, tambah, edit)
│       └── kritik_saran/ (index)
│
├── aksi/
│   ├── helper_upload.php              ← Helper upload foto
│   ├── aksi_login.php
│   ├── aksi_logout.php
│   ├── aksi_kirim_kritik.php
│   ├── aksi_tambah_galeri.php
│   ├── aksi_edit_galeri.php
│   ├── aksi_hapus_galeri.php
│   ├── aksi_tambah_event.php
│   ├── aksi_edit_event.php
│   ├── aksi_hapus_event.php
│   ├── aksi_tambah_umkm.php
│   ├── aksi_edit_umkm.php
│   ├── aksi_hapus_umkm.php
│   └── aksi_hapus_kritik.php
│
├── assets/
│   ├── css/style.css                  ← Custom CSS (di atas Bootstrap 5)
│   ├── js/main.js                     ← Custom JS + Vue 3 komponen
│   ├── img/                           ← Gambar statis
│   └── uploads/
│       ├── galeri/                    ← Upload foto galeri (admin)
│       └── umkm/                      ← Upload foto UMKM (admin)
│
└── database/
    └── kampung_ketupat.sql            ← SQL dump lengkap (opsional)
```

---

## 🗄️ Struktur Database

```sql
-- Tabel: admin
id, username, password (bcrypt), nama_lengkap, created_at

-- Tabel: galeri
id, judul, deskripsi, foto, kategori (wisata/kuliner/budaya/fasilitas/umum), created_at

-- Tabel: event
id, nama_event, deskripsi, tanggal_mulai, tanggal_selesai, lokasi, foto,
status (akan_datang/berlangsung/selesai), created_at

-- Tabel: umkm
id, nama_umkm, pemilik, kategori (kuliner/kerajinan/souvenir/jasa/lainnya),
deskripsi, produk_unggulan, kontak, alamat, foto, created_at

-- Tabel: kritik_saran
id, nama_pengunjung, email, jenis (kritik/saran/pertanyaan/apresiasi),
pesan, sudah_dibaca, created_at
```

---

## 🚀 Cara Menjalankan (Laragon)

### 1. Persiapan
- Pastikan **Laragon** sudah terinstall dan aktif (Apache + MySQL)
- Pastikan **mod_rewrite** Apache aktif (default aktif di Laragon)

### 2. Setup Project
```
1. Extract / clone project ke:
   C:\laragon\www\kampung-ketupat\

2. Pastikan struktur folder sudah benar:
   C:\laragon\www\kampung-ketupat\index.php  ✓
   C:\laragon\www\kampung-ketupat\koneksi.php  ✓
```

### 3. Konfigurasi Database
Buka `koneksi.php` dan sesuaikan jika perlu:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');   // default Laragon
define('DB_PASS', '');       // default Laragon: kosong
define('DB_NAME', 'kampung_ketupat');
```
> **Database akan otomatis dibuat** beserta semua tabel dan data awal saat pertama kali website dibuka.

### 4. Buka Website
```
Website utama  : http://localhost/kampung-ketupat
Login admin    : http://localhost/kampung-ketupat/admin/login
```

### 5. Akun Admin Default
```
Username : admin
Password : admin123
```
> Ganti password setelah pertama kali login melalui phpMyAdmin.

---

## 🌐 Halaman & URL

| Halaman | URL |
|---|---|
| Beranda | `http://localhost/kampung-ketupat/` |
| Detail Wisata | `http://localhost/kampung-ketupat/wisata` |
| Galeri | `http://localhost/kampung-ketupat/galeri` |
| Kalender Event | `http://localhost/kampung-ketupat/event` |
| UMKM Lokal | `http://localhost/kampung-ketupat/umkm` |
| Lokasi | `http://localhost/kampung-ketupat/lokasi` |
| Kritik & Saran | `http://localhost/kampung-ketupat/kritik-saran` |
| Kontak | `http://localhost/kampung-ketupat/kontak` |
| **Admin Login** | `http://localhost/kampung-ketupat/admin/login` |
| **Dashboard Admin** | `http://localhost/kampung-ketupat/admin/dashboard` |
| Kelola Galeri | `http://localhost/kampung-ketupat/admin/galeri` |
| Kelola Event | `http://localhost/kampung-ketupat/admin/event` |
| Kelola UMKM | `http://localhost/kampung-ketupat/admin/umkm` |
| Kelola Kritik Saran | `http://localhost/kampung-ketupat/admin/kritik-saran` |

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
| **Koordinat** | Samarinda Seberang, tepi Sungai Mahakam |

---

## 📝 Catatan Pengembangan

- Proyek ini bersifat **statis lokal** — tidak memerlukan backend server eksternal
- File upload foto disimpan di `assets/uploads/` — pastikan folder ini **writable** (`chmod 755` di Linux/Mac)
- Untuk hosting di InfinityFree/000webhost, ubah `BASE_URL` di `index.php` sesuai domain
- Password admin menggunakan **bcrypt** (`password_hash` & `password_verify`) — aman untuk produksi
- Koneksi database menggunakan **mysqli** dengan prepared statements untuk mencegah SQL Injection

---

# 📖 Panduan Penggunaan Website
# Kampung Ketupat Warna Warni Samarinda

> Versi Terbaru — Maret 2026  
> Kelompok 2 | Sistem Informasi | Universitas Mulawarman

---

## ⚙️ Persiapan Awal (Wajib Sebelum Mulai)

### 1. Pastikan Laragon Aktif
- Buka aplikasi **Laragon**
- Klik tombol **Start All** — pastikan Apache dan MySQL berstatus **hijau/running**

### 2. Letakkan Folder Project
- Pastikan folder `kampung-ketupat` sudah ada di:
  ```
  C:\laragon\www\kampung-ketupat\
  ```
- Pastikan file `index.php` dan `koneksi.php` ada di dalam folder tersebut

### 3. Buka Website
- Buka browser (Chrome / Edge / Firefox)
- Ketik di address bar:
  ```
  http://localhost/kampung-ketupat
  ```
- **Database otomatis terbuat** — tidak perlu import SQL manual

> ✅ Jika halaman beranda muncul, website sudah berjalan dengan benar.

---

---

# 👤 PANDUAN PENGGUNA (User / Pengunjung)

> Semua halaman berikut dapat diakses **tanpa login**.

---

## 🏠 1. Halaman Beranda
**URL:** `http://localhost/kampung-ketupat`

**Isi halaman:**
- **Hero Section** — foto kampung dengan judul besar dan 2 tombol:
  - *Jelajahi Sekarang* → menuju halaman Detail Wisata
  - *Lihat Lokasi* → menuju halaman Lokasi
- **Badge info cepat** — jam buka, tiket gratis, WiFi, jarak dari pusat kota
- **Tentang** — sejarah singkat Kampung Ketupat, asal-usul nama, info Pokdarwis
- **Tourism Highlights** — 3 kartu daya tarik utama (Wisata Budaya, Kuliner Ketupat, Suasana Tepi Mahakam)
- **Preview Galeri** — 6 foto terbaru, ada tombol *Lihat Semua Foto*
- **Event Mendatang** — maksimal 3 event terdekat
- **UMKM Lokal** — preview 4 UMKM warga
- **Banner CTA** — tombol menuju Lokasi dan Kritik & Saran

**Cara navigasi:**
- Klik menu di navbar atas untuk berpindah halaman
- Di mobile, klik ikon ☰ (hamburger) untuk membuka menu

---

## 🗺️ 2. Halaman Detail Wisata
**URL:** `http://localhost/kampung-ketupat/wisata`

**Isi halaman:**
- Deskripsi lengkap Kampung Ketupat Warna Warni
- Info kunjungan: alamat, jam buka (08.30–17.30 WITA), tiket masuk (gratis), nama pengelola
- **Grid fasilitas** — 12 fasilitas tersedia (parkir, toilet, musholla, WiFi, homestay, mobil wisata, dll)
- **Kartu aktivitas wisata** — 6 aktivitas yang bisa dilakukan pengunjung

---

## 🖼️ 3. Halaman Galeri
**URL:** `http://localhost/kampung-ketupat/galeri`

**Cara penggunaan:**
1. Buka halaman Galeri
2. Tampil tombol filter kategori: **Semua / Wisata / Kuliner / Budaya / Fasilitas / Umum**
3. Klik salah satu tombol untuk memfilter foto berdasarkan kategori
4. Foto tampil dalam grid — arahkan kursor ke foto untuk melihat judul foto
5. Filter bekerja secara real-time tanpa reload halaman (Vue.js)

---

## 📅 4. Halaman Kalender Event
**URL:** `http://localhost/kampung-ketupat/event`

**Cara penggunaan:**
1. Buka halaman Event
2. Tampil semua event yang tersedia
3. Gunakan tombol filter: **Semua / Akan Datang / Berlangsung / Selesai**
4. Setiap kartu event menampilkan: tanggal, nama event, deskripsi singkat, lokasi, dan status
5. Filter bekerja real-time (Vue.js)

> Jika belum ada event, halaman menampilkan pesan "Belum ada event yang tersedia."

---

## 🏪 5. Halaman UMKM Lokal
**URL:** `http://localhost/kampung-ketupat/umkm`

**Cara penggunaan:**
1. Buka halaman UMKM
2. Tampil seluruh daftar UMKM warga Kampung Ketupat
3. **Cari UMKM** — ketik nama di kolom pencarian, hasil langsung difilter
4. **Filter kategori** — pilih dari dropdown: Kuliner / Kerajinan / Souvenir / Jasa
5. Setiap kartu UMKM menampilkan: foto, nama usaha, pemilik, produk unggulan, dan tombol Hubungi
6. Klik tombol **Hubungi** untuk langsung menelepon nomor kontak UMKM

---

## 📍 6. Halaman Lokasi
**URL:** `http://localhost/kampung-ketupat/lokasi`

**Isi halaman:**
- Informasi lengkap alamat, jam operasional, harga tiket, jarak dari pusat kota
- **Embed Google Maps** — peta interaktif lokasi Kampung Ketupat
- Tombol **Buka di Google Maps** — membuka Google Maps di tab baru untuk navigasi langsung

> ⚠️ Peta Maps memerlukan koneksi internet untuk tampil.

---

## 💬 7. Halaman Kritik & Saran
**URL:** `http://localhost/kampung-ketupat/kritik-saran`

**Cara mengirim pesan:**
1. Buka halaman Kritik & Saran
2. Isi formulir:
   - **Nama Lengkap** *(wajib)* — nama pengirim
   - **Email** *(opsional)* — untuk balasan dari pengelola
   - **Jenis Pesan** — pilih: Kritik / Saran / Pertanyaan / Apresiasi
   - **Pesan** *(wajib, minimal 10 karakter)* — tulis pesan Anda
3. Klik tombol **Kirim Pesan**
4. Validasi berjalan otomatis (Vue.js) — field yang salah akan ditandai merah
5. Jika berhasil, muncul pesan hijau: *"Terima kasih! Pesan Anda telah terkirim."*
6. Pesan tersimpan di database dan dapat dibaca oleh admin

---

## 📞 8. Halaman Kontak
**URL:** `http://localhost/kampung-ketupat/kontak`

**Isi halaman:**
- Alamat lengkap Kampung Ketupat
- Nama Ketua Pokdarwis (Bapak Haji Abdul Azis)
- Info media sosial resmi kampung
- Tombol menuju halaman Kritik & Saran

---

---

# 🔐 PANDUAN ADMIN

> Semua fitur admin memerlukan **login terlebih dahulu**.

---

## 🔑 Login Admin

**URL:** `http://localhost/kampung-ketupat/admin/login`

**Langkah login:**
1. Buka URL di atas
2. Masukkan kredensial:
   - **Username:** `admin`
   - **Password:** `admin123`
3. Klik tombol **Masuk**
4. Jika berhasil → otomatis diarahkan ke **Dashboard**
5. Jika gagal → muncul pesan merah *"Username atau password salah"*

> 💡 Jika membuka halaman login tapi langsung masuk dashboard — itu normal, artinya sesi login masih aktif dari sebelumnya.

---

## 🏠 Dashboard Admin

**URL:** `http://localhost/kampung-ketupat/admin/dashboard`

**Isi dashboard:**
- **4 Kartu Statistik:**
  - Total Foto Galeri
  - Event Aktif
  - UMKM Terdaftar
  - Pesan Belum Dibaca
- **Aksi Cepat** — tombol shortcut untuk Tambah Foto, Tambah Event, Tambah UMKM, Lihat Pesan
- **Tabel Pesan Terbaru** — 5 kritik & saran terbaru dari pengunjung

**Sidebar navigasi (kiri):**
- Dashboard
- Galeri Wisata
- Event / Kalender
- UMKM Lokal
- Kritik & Saran
- Lihat Website (buka tab baru)
- Logout

---

## 🖼️ Kelola Galeri Wisata

**URL:** `http://localhost/kampung-ketupat/admin/galeri`

### Melihat Daftar Foto
- Buka menu **Galeri Wisata** di sidebar
- Semua foto tampil dalam grid beserta judul, kategori, dan tombol aksi

### Tambah Foto Baru
1. Klik tombol **+ Tambah Foto** (kanan atas)
2. Isi form:
   - **Judul Foto** *(wajib)*
   - **Kategori** — pilih: Umum / Wisata / Kuliner / Budaya / Fasilitas
   - **Deskripsi** *(opsional)*
   - **Upload Foto** *(wajib)* — format JPG/PNG/WEBP, maksimal 5MB
3. Klik **Simpan**
4. Foto tersimpan di `assets/uploads/galeri/` dan muncul di halaman Galeri

### Edit Foto
1. Klik ikon ✏️ (pensil) pada foto yang ingin diedit
2. Ubah judul, kategori, atau deskripsi sesuai kebutuhan
3. Upload foto baru jika ingin mengganti gambar (kosongkan jika tidak ingin ganti)
4. Klik **Perbarui**

### Hapus Foto
1. Klik ikon 🗑️ (tong sampah) pada foto yang ingin dihapus
2. Konfirmasi di dialog: klik **OK**
3. Foto dihapus dari database dan file fisiknya ikut terhapus

---

## 📅 Kelola Event / Kalender

**URL:** `http://localhost/kampung-ketupat/admin/event`

### Melihat Daftar Event
- Buka menu **Event / Kalender** di sidebar
- Semua event tampil dalam tabel dengan kolom: nama, tanggal, lokasi, status

### Tambah Event Baru
1. Klik tombol **+ Tambah Event**
2. Isi form:
   - **Nama Event** *(wajib)*
   - **Deskripsi** *(opsional)*
   - **Tanggal Mulai** *(wajib)*
   - **Tanggal Selesai** *(opsional)*
   - **Lokasi** — default: *Kampung Ketupat Warna Warni, Samarinda*
   - **Status** — pilih: Akan Datang / Sedang Berlangsung / Selesai
   - **Foto Event** *(opsional)*
3. Klik **Simpan**

### Edit Event
1. Klik ikon ✏️ pada event yang ingin diubah
2. Ubah data yang diperlukan (termasuk update status jika event sudah selesai)
3. Klik **Perbarui**

### Hapus Event
1. Klik ikon 🗑️ pada event yang ingin dihapus
2. Konfirmasi → klik **OK**

---

## 🏪 Kelola UMKM Lokal

**URL:** `http://localhost/kampung-ketupat/admin/umkm`

### Melihat Daftar UMKM
- Buka menu **UMKM Lokal** di sidebar
- Semua UMKM tampil dalam tabel: nama usaha, pemilik, kategori, kontak

### Tambah UMKM Baru
1. Klik tombol **+ Tambah UMKM**
2. Isi form:
   - **Nama UMKM** *(wajib)*
   - **Pemilik** *(opsional)*
   - **Kategori** — Kuliner / Kerajinan / Souvenir / Jasa / Lainnya
   - **Kontak** — nomor HP / WhatsApp
   - **Produk Unggulan** — produk utama yang dijual
   - **Alamat** — alamat di dalam kampung
   - **Deskripsi** *(opsional)*
   - **Foto UMKM** *(opsional)* — format JPG/PNG/WEBP, maks 5MB
3. Klik **Simpan**

### Edit UMKM
1. Klik ikon ✏️ pada UMKM yang ingin diubah
2. Perbarui data yang diperlukan
3. Klik **Perbarui**

### Hapus UMKM
1. Klik ikon 🗑️ → konfirmasi → **OK**

---

## 💬 Kelola Kritik & Saran

**URL:** `http://localhost/kampung-ketupat/admin/kritik-saran`

### Melihat Semua Pesan
- Buka menu **Kritik & Saran** di sidebar
- Semua pesan dari pengunjung tampil dalam kartu-kartu
- Pesan baru ditandai badge **"Baru"** (kuning)
- Setiap kartu menampilkan: nama pengirim, jenis pesan, isi pesan, tanggal kiriman

### Hapus Pesan
1. Klik ikon 🗑️ pada pesan yang tidak relevan
2. Konfirmasi → **OK**
3. Pesan terhapus dari database

> 💡 Tidak ada fitur balas pesan langsung dari website — admin dapat menghubungi pengunjung via email yang tertera jika pengunjung mengisi field email.

---

## 🚪 Logout Admin

**Cara logout:**
- Klik menu **Logout** di bagian bawah sidebar
- Konfirmasi: klik **OK**
- Session dihapus → otomatis diarahkan ke halaman login

---

---

## ❓ Troubleshooting — Masalah Umum

| Masalah | Penyebab | Solusi |
|---|---|---|
| Halaman tidak bisa dibuka | Laragon belum aktif | Buka Laragon → klik **Start All** |
| "Unable to connect" | Apache tidak berjalan | Cek status Apache di Laragon, restart jika perlu |
| Halaman kosong / error merah | Database belum terbuat | Buka `http://localhost/kampung-ketupat` sekali, database otomatis terbuat |
| Login admin gagal | Password salah / hash tidak cocok | Jalankan `reset_password.php` lalu hapus setelah selesai |
| Langsung masuk dashboard saat buka login | Session masih aktif | Normal — buka `http://localhost/kampung-ketupat/admin/logout` dulu |
| Foto tidak tampil setelah upload | Folder uploads tidak writable | Pastikan folder `assets/uploads/galeri/` dan `assets/uploads/umkm/` ada dan bisa ditulis |
| Peta Google Maps tidak muncul | Tidak ada koneksi internet | Sambungkan internet — Maps butuh koneksi |
| URL tidak dikenali / 404 | `.htaccess` tidak aktif | Aktifkan `mod_rewrite` di Apache Laragon |

---

## 📌 Ringkasan URL Penting

| Halaman | URL |
|---|---|
| Beranda | `http://localhost/kampung-ketupat` |
| Detail Wisata | `http://localhost/kampung-ketupat/wisata` |
| Galeri | `http://localhost/kampung-ketupat/galeri` |
| Event | `http://localhost/kampung-ketupat/event` |
| UMKM | `http://localhost/kampung-ketupat/umkm` |
| Lokasi | `http://localhost/kampung-ketupat/lokasi` |
| Kritik & Saran | `http://localhost/kampung-ketupat/kritik-saran` |
| Kontak | `http://localhost/kampung-ketupat/kontak` |
| **Login Admin** | `http://localhost/kampung-ketupat/admin/login` |
| **Dashboard Admin** | `http://localhost/kampung-ketupat/admin/dashboard` |
| Kelola Galeri | `http://localhost/kampung-ketupat/admin/galeri` |
| Kelola Event | `http://localhost/kampung-ketupat/admin/event` |
| Kelola UMKM | `http://localhost/kampung-ketupat/admin/umkm` |
| Kritik & Saran (Admin) | `http://localhost/kampung-ketupat/admin/kritik-saran` |
| Logout Admin | `http://localhost/kampung-ketupat/admin/logout` |

---

*© 2026 Kampung Ketupat Warna Warni Samarinda — Kelompok 2, Sistem Informasi Universitas Mulawarman*
