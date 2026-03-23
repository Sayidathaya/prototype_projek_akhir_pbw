<?php
// ============================================================
// FILE: view/layout/footer.php
// Footer - Kampung Ketupat Warna Warni
// ============================================================
?>

<!-- ===== FOOTER ===== -->
<footer class="footer-kk mt-auto">
  <div class="container">
    <div class="row gy-4 py-5">

      <!-- Kolom 1: Brand -->
      <div class="col-lg-4 col-md-6">
        <h5 class="footer-brand mb-3">🏡 Kampung Ketupat <span class="text-accent">Warna Warni</span></h5>
        <p class="text-muted-light small">
          Destinasi wisata budaya dan kuliner di tepi Sungai Mahakam, Samarinda Seberang,
          Kalimantan Timur. Dikelola oleh <strong>Pokdarwis</strong> bersama Disporapar Kota Samarinda.
        </p>
        <div class="d-flex gap-3 mt-3">
          <a href="#" class="footer-sosmed" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="footer-sosmed" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="footer-sosmed" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
          <a href="#" class="footer-sosmed" aria-label="TikTok"><i class="bi bi-tiktok"></i></a>
        </div>
      </div>

      <!-- Kolom 2: Navigasi -->
      <div class="col-lg-2 col-md-6 col-6">
        <h6 class="footer-heading">Navigasi</h6>
        <ul class="footer-links list-unstyled">
          <li><a href="<?= BASE_URL ?>">Beranda</a></li>
          <li><a href="<?= BASE_URL ?>/wisata">Detail Wisata</a></li>
          <li><a href="<?= BASE_URL ?>/galeri">Galeri</a></li>
          <li><a href="<?= BASE_URL ?>/event">Event</a></li>
          <li><a href="<?= BASE_URL ?>/umkm">UMKM Lokal</a></li>
        </ul>
      </div>

      <!-- Kolom 3: Informasi -->
      <div class="col-lg-2 col-md-6 col-6">
        <h6 class="footer-heading">Informasi</h6>
        <ul class="footer-links list-unstyled">
          <li><a href="<?= BASE_URL ?>/lokasi">Lokasi</a></li>
          <li><a href="<?= BASE_URL ?>/kontak">Kontak</a></li>
          <li><a href="<?= BASE_URL ?>/kritik-saran">Kritik & Saran</a></li>
          <li><a href="<?= BASE_URL ?>/admin">Admin</a></li>
        </ul>
      </div>

      <!-- Kolom 4: Info Kunjungan -->
      <div class="col-lg-4 col-md-6">
        <h6 class="footer-heading">Info Kunjungan</h6>
        <ul class="list-unstyled small text-muted-light">
          <li class="mb-2">
            <i class="bi bi-geo-alt-fill text-accent me-2"></i>
            Jl. Mangkupalas, Kel. Mesjid, Kec. Samarinda Seberang, Kota Samarinda, Kaltim 75251
          </li>
          <li class="mb-2">
            <i class="bi bi-clock-fill text-accent me-2"></i>
            Setiap Hari: 08.30 – 17.30 WITA
          </li>
          <li class="mb-2">
            <i class="bi bi-ticket-perforated-fill text-accent me-2"></i>
            Tiket Masuk: <strong>Gratis</strong>
          </li>
          <li class="mb-2">
            <i class="bi bi-car-front-fill text-accent me-2"></i>
            ±26 menit dari pusat Kota Samarinda
          </li>
        </ul>
      </div>

    </div>

    <hr class="footer-divider" />

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center py-3 small text-muted-light">
      <p class="mb-0">© <?= date('Y') ?> Kampung Ketupat Warna Warni Samarinda. All rights reserved.</p>
      <p class="mb-0 mt-2 mt-md-0">
        Dibuat oleh <strong>Kelompok 2</strong> — Sistem Informasi, Universitas Mulawarman
      </p>
    </div>
  </div>
</footer>
<!-- ===== END FOOTER ===== -->

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Vue 3 CDN -->
<script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
<!-- Custom JS -->
<script src="<?= BASE_URL ?>/assets/js/main.js"></script>
<?= $extra_js ?? '' ?>
</body>
</html>
