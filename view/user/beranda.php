<?php require_once BASE_PATH . '/view/layout/header.php'; ?>

<!-- ===== HERO ===== -->
<section class="hero-kk" id="beranda">
  <div class="container position-relative" style="z-index:2;">
    <div class="row">
      <div class="col-lg-8">
        <span class="hero-tag">✨ Explore Samarinda Seberang</span>
        <h1 class="reveal">Kampung Ketupat<br><span style="color:var(--kk-secondary);">Warna Warni</span><br>Samarinda</h1>
        <p class="hero-subtitle reveal reveal-delay-1">
          Destinasi wisata budaya dan kuliner di tepi Sungai Mahakam, Kalimantan Timur.
          Nikmati keindahan rumah warna-warni, kuliner ketupat khas, dan suasana kampung yang autentik.
        </p>
        <div class="d-flex flex-wrap gap-3 reveal reveal-delay-2">
          <a href="<?= BASE_URL ?>/wisata" class="btn btn-kk">
            <i class="bi bi-compass me-2"></i>Jelajahi Sekarang
          </a>
          <a href="<?= BASE_URL ?>/lokasi" class="btn btn-kk-secondary">
            <i class="bi bi-geo-alt me-2"></i>Lihat Lokasi
          </a>
        </div>
        <div class="hero-badges reveal reveal-delay-3">
          <span class="hero-badge"><i class="bi bi-clock me-1"></i>Buka 08.30–17.30 WITA</span>
          <span class="hero-badge"><i class="bi bi-ticket-perforated me-1"></i>Tiket Gratis</span>
          <span class="hero-badge"><i class="bi bi-wifi me-1"></i>Area WiFi</span>
          <span class="hero-badge"><i class="bi bi-car-front me-1"></i>±26 Menit dari Pusat Kota</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== TENTANG ===== -->
<section class="section-kk" id="tentang">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 reveal">
        <span class="section-label">Tentang Kami</span>
        <h2 class="section-title">Mengenal Kampung Ketupat Warna Warni</h2>
        <p class="text-muted mb-3">
          Kampung Ketupat Warna Warni adalah salah satu ikon wisata baru di Kota Samarinda yang terletak
          di tepi Sungai Mahakam, tepatnya di wilayah Samarinda Seberang.
        </p>
        <p class="text-muted mb-3">
          Kawasan ini sebelumnya merupakan pemukiman yang tergolong kumuh, kemudian mengalami penataan
          melalui program <strong>Kota Tanpa Kumuh (KOTAKU)</strong> sehingga berubah menjadi kampung wisata
          yang dikenal dengan rumah-rumah berwarna cerah dan lingkungan yang tertata.
        </p>
        <p class="text-muted mb-4">
          Nama "Ketupat" diambil karena sebagian besar warga setempat berprofesi sebagai pengrajin ketupat
          yang telah mewariskan keterampilan tersebut secara turun-temurun. Dikelola oleh
          <strong>Pokdarwis (Kelompok Sadar Wisata)</strong> bersama Disporapar Kota Samarinda.
        </p>
        <a href="<?= BASE_URL ?>/wisata" class="btn btn-kk">
          <i class="bi bi-info-circle me-2"></i>Selengkapnya
        </a>
      </div>
      <div class="col-lg-6 reveal reveal-delay-1">
        <div class="row g-3">
          <div class="col-6">
            <div class="card-kk text-center p-4">
              <div class="stat-number" style="color:var(--kk-primary);">5+</div>
              <div class="text-muted small">Tahun Berdiri</div>
            </div>
          </div>
          <div class="col-6">
            <div class="card-kk text-center p-4">
              <div class="stat-number" style="color:var(--kk-accent);">Gratis</div>
              <div class="text-muted small">Tiket Masuk</div>
            </div>
          </div>
          <div class="col-6">
            <div class="card-kk text-center p-4">
              <div class="stat-number" style="color:var(--kk-secondary);"><?= count($umkm_preview) ?>+</div>
              <div class="text-muted small">UMKM Lokal</div>
            </div>
          </div>
          <div class="col-6">
            <div class="card-kk text-center p-4">
              <div class="stat-number" style="color:var(--kk-primary);">7</div>
              <div class="text-muted small">Hari/Minggu Buka</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== TOURISM HIGHLIGHTS ===== -->
<section class="section-kk section-soft" id="highlights">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="section-label">Daya Tarik</span>
      <h2 class="section-title">Tourism Highlights</h2>
      <p class="section-subtitle">Tiga pengalaman utama yang bisa Anda nikmati di Kampung Ketupat Warna Warni</p>
    </div>
    <div class="row g-4">
      <div class="col-md-4 reveal">
        <div class="card-kk h-100 card-body text-center">
          <div class="highlight-icon mx-auto">🏛️</div>
          <h4 class="highlight-title">Wisata Budaya</h4>
          <p class="text-muted">
            Saksikan langsung proses menganyam ketupat dari daun nipah, tradisi yang telah
            diwariskan turun-temurun oleh warga setempat. Kunjungi spot foto ikonik monumen ketupat raksasa
            berlatar Jembatan Mahkota II.
          </p>
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-1">
        <div class="card-kk h-100 card-body text-center">
          <div class="highlight-icon mx-auto">🍲</div>
          <h4 class="highlight-title">Kuliner Ketupat Khas</h4>
          <p class="text-muted">
            Nikmati Soto Banjar dan Coto Makassar bersama ketupat produksi lokal sambil menikmati
            pemandangan Sungai Mahakam. Tersedia berbagai warung makan dan kafetaria yang dikelola
            masyarakat setempat.
          </p>
        </div>
      </div>
      <div class="col-md-4 reveal reveal-delay-2">
        <div class="card-kk h-100 card-body text-center">
          <div class="highlight-icon mx-auto">🌅</div>
          <h4 class="highlight-title">Suasana Tepi Mahakam</h4>
          <p class="text-muted">
            Rasakan ketenangan area santai di tepi Sungai Mahakam dengan pemandangan indah Jembatan Mahkota II.
            Rumah-rumah warna-warni menciptakan suasana kampung yang hangat dan fotogenik.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== GALERI PREVIEW ===== -->
<?php if (!empty($galeri_preview)): ?>
<section class="section-kk" id="galeri">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="section-label">Galeri</span>
      <h2 class="section-title">Galeri Wisata</h2>
      <p class="section-subtitle">Sekilas keindahan Kampung Ketupat Warna Warni</p>
    </div>
    <div class="row g-3">
      <?php foreach ($galeri_preview as $i => $foto): ?>
      <div class="col-sm-6 col-lg-4 reveal <?= $i > 0 ? 'reveal-delay-' . min($i, 3) : '' ?>">
        <div class="gallery-item">
          <?php
            $src = str_starts_with($foto['foto'], 'http')
              ? $foto['foto']
              : BASE_URL . '/assets/uploads/galeri/' . $foto['foto'];
          ?>
          <img src="<?= htmlspecialchars($src) ?>" alt="<?= htmlspecialchars($foto['judul']) ?>" loading="lazy" />
          <div class="gallery-overlay">
            <span class="gallery-caption"><?= htmlspecialchars($foto['judul']) ?></span>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="text-center mt-4 reveal">
      <a href="<?= BASE_URL ?>/galeri" class="btn btn-kk-outline">
        <i class="bi bi-images me-2"></i>Lihat Semua Foto
      </a>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ===== EVENT PREVIEW ===== -->
<?php if (!empty($event_preview)): ?>
<section class="section-kk section-soft">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="section-label">Agenda</span>
      <h2 class="section-title">Event Mendatang</h2>
    </div>
    <div class="row g-4">
      <?php foreach ($event_preview as $ev): ?>
      <div class="col-md-4 reveal">
        <div class="card-kk h-100">
          <div class="card-body d-flex gap-3">
            <div class="event-date-box flex-shrink-0">
              <div class="day"><?= date('d', strtotime($ev['tanggal_mulai'])) ?></div>
              <div class="month"><?= date('M', strtotime($ev['tanggal_mulai'])) ?></div>
            </div>
            <div>
              <h6 class="fw-bold mb-1"><?= htmlspecialchars($ev['nama_event']) ?></h6>
              <p class="text-muted small mb-1"><?= htmlspecialchars(substr($ev['deskripsi'], 0, 80)) ?>...</p>
              <small class="text-muted"><i class="bi bi-geo-alt me-1"></i><?= htmlspecialchars($ev['lokasi']) ?></small>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="text-center mt-4 reveal">
      <a href="<?= BASE_URL ?>/event" class="btn btn-kk-outline">
        <i class="bi bi-calendar-event me-2"></i>Lihat Semua Event
      </a>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ===== UMKM PREVIEW ===== -->
<?php if (!empty($umkm_preview)): ?>
<section class="section-kk">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="section-label">UMKM Lokal</span>
      <h2 class="section-title">Usaha Masyarakat Kampung Ketupat</h2>
      <p class="section-subtitle">Dukung ekonomi lokal dengan berbelanja dan menikmati produk UMKM warga</p>
    </div>
    <div class="row g-4">
      <?php foreach ($umkm_preview as $u): ?>
      <div class="col-sm-6 col-lg-3 reveal">
        <div class="card-kk umkm-card h-100">
          <?php
            $usrc = $u['foto'] ? BASE_URL . '/assets/uploads/umkm/' . $u['foto']
              : 'https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=400&q=60';
          ?>
          <img src="<?= htmlspecialchars($usrc) ?>" alt="<?= htmlspecialchars($u['nama_umkm']) ?>" loading="lazy" />
          <div class="card-body">
            <span class="umkm-badge"><?= htmlspecialchars($u['kategori']) ?></span>
            <h6 class="fw-bold mb-1"><?= htmlspecialchars($u['nama_umkm']) ?></h6>
            <p class="text-muted small"><?= htmlspecialchars($u['pemilik']) ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="text-center mt-4 reveal">
      <a href="<?= BASE_URL ?>/umkm" class="btn btn-kk-outline">
        <i class="bi bi-shop me-2"></i>Lihat Semua UMKM
      </a>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ===== CTA BANNER ===== -->
<section style="background:linear-gradient(135deg,var(--kk-dark),var(--kk-primary));padding:80px 0;">
  <div class="container text-center reveal">
    <h2 class="section-title" style="color:#fff;">Ingin Berkunjung?</h2>
    <p style="color:rgba(255,255,255,.8);margin-bottom:28px;max-width:520px;margin-left:auto;margin-right:auto;">
      Temukan lokasi kami dan rencanakan kunjungan Anda ke Kampung Ketupat Warna Warni Samarinda.
    </p>
    <div class="d-flex justify-content-center flex-wrap gap-3">
      <a href="<?= BASE_URL ?>/lokasi" class="btn btn-kk-secondary">
        <i class="bi bi-geo-alt me-2"></i>Lihat Lokasi & Peta
      </a>
      <a href="<?= BASE_URL ?>/kritik-saran" class="btn btn-kk-outline" style="border-color:rgba(255,255,255,.5);color:#fff;">
        <i class="bi bi-chat-heart me-2"></i>Berikan Saran
      </a>
    </div>
  </div>
</section>

<?php require_once BASE_PATH . '/view/layout/footer.php'; ?>
