<?php require_once BASE_PATH . '/view/layout/header.php'; ?>

<section class="section-kk" style="padding-top:50px;">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="section-label">Informasi Lengkap</span>
      <h1 class="section-title">Detail Wisata Kampung Ketupat</h1>
      <p class="section-subtitle">Semua yang perlu Anda ketahui sebelum berkunjung</p>
    </div>

    <!-- Info Utama -->
    <div class="row g-4 mb-5">
      <div class="col-lg-7 reveal">
        <div class="card-kk card-body h-100">
          <h4 style="font-family:var(--font-display);color:var(--kk-dark);" class="mb-3">📖 Tentang Kampung Ketupat Warna Warni</h4>
          <p class="text-muted">
            Kampung Ketupat Warna Warni merupakan destinasi wisata budaya dan kuliner yang terletak di tepi
            <strong>Sungai Mahakam</strong>, tepatnya di wilayah Samarinda Seberang. Kawasan ini sebelumnya
            merupakan pemukiman kumuh yang kemudian mengalami penataan melalui program
            <strong>Kota Tanpa Kumuh (KOTAKU)</strong>.
          </p>
          <p class="text-muted">
            Kini, Kampung Ketupat menjadi salah satu ikon wisata baru Kota Samarinda dengan ciri khas
            <strong>rumah-rumah berwarna cerah</strong>, monumen ketupat raksasa, dan latar indah Jembatan Mahkota II.
          </p>
          <p class="text-muted">
            Nama "Ketupat" diambil karena mayoritas warga berprofesi sebagai pengrajin ketupat anyaman daun nipah
            yang sudah turun-temurun. Pengunjung dapat menyaksikan langsung proses pembuatan ketupat dan
            menikmati kuliner khas seperti Soto Banjar dan Coto Makassar.
          </p>
          <p class="text-muted mb-0">
            Dikelola oleh <strong>Pokdarwis (Kelompok Sadar Wisata)</strong> bersama Disporapar Kota Samarinda
            sejak sekitar 5 tahun terakhir.
          </p>
        </div>
      </div>
      <div class="col-lg-5 reveal reveal-delay-1">
        <div class="card-kk card-body h-100">
          <h5 style="color:var(--kk-primary);" class="mb-3"><i class="bi bi-info-circle me-2"></i>Informasi Kunjungan</h5>
          <ul class="info-kk-list">
            <li>
              <i class="bi bi-geo-alt-fill info-icon"></i>
              <div><strong>Alamat:</strong><br>Jl. Mangkupalas, Kel. Mesjid, Kec. Samarinda Seberang, Kota Samarinda, Kaltim 75251</div>
            </li>
            <li>
              <i class="bi bi-clock-fill info-icon"></i>
              <div><strong>Jam Buka:</strong><br>Setiap hari, 08.30 – 17.30 WITA</div>
            </li>
            <li>
              <i class="bi bi-ticket-perforated-fill info-icon"></i>
              <div><strong>Harga Tiket Masuk:</strong><br><span class="text-success fw-bold">GRATIS</span> (beberapa paket wisata edukasi berbayar)</div>
            </li>
            <li>
              <i class="bi bi-car-front-fill info-icon"></i>
              <div><strong>Jarak dari Pusat Kota:</strong><br>±26 menit perjalanan</div>
            </li>
            <li>
              <i class="bi bi-building info-icon"></i>
              <div><strong>Pengelola:</strong><br>Pokdarwis Kampung Ketupat Warna Warni (Ketua: H. Abdul Azis)</div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Fasilitas -->
    <div class="reveal mb-5">
      <div class="text-center mb-4">
        <h3 style="font-family:var(--font-display);color:var(--kk-dark);">Fasilitas Tersedia</h3>
      </div>
      <div class="row g-3">
        <?php
        $fasilitas = [
          ['icon' => '🅿️', 'label' => 'Area Parkir'],
          ['icon' => '🚻', 'label' => 'Toilet Umum'],
          ['icon' => '🕌', 'label' => 'Musholla'],
          ['icon' => '🛍️', 'label' => 'Kios Souvenir'],
          ['icon' => '🍽️', 'label' => 'Warung Makan / Kafetaria'],
          ['icon' => '🛝', 'label' => 'Taman Bermain Anak'],
          ['icon' => '🛋️', 'label' => 'Area Santai Tepi Sungai'],
          ['icon' => '📶', 'label' => 'Akses WiFi'],
          ['icon' => '🚌', 'label' => 'Mobil Wisata Keliling'],
          ['icon' => '🏠', 'label' => 'Homestay'],
          ['icon' => '📸', 'label' => 'Spot Foto Ikonik'],
          ['icon' => '🎓', 'label' => 'Paket Wisata Edukasi'],
        ];
        foreach ($fasilitas as $f):
        ?>
        <div class="col-6 col-md-4 col-lg-2">
          <div class="fasilitas-item">
            <div class="fasilitas-icon"><?= $f['icon'] ?></div>
            <div class="fasilitas-label"><?= $f['label'] ?></div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Aktivitas -->
    <div class="row g-4 reveal">
      <div class="col-12">
        <h3 class="text-center mb-4" style="font-family:var(--font-display);color:var(--kk-dark);">Aktivitas Wisata</h3>
      </div>
      <?php
      $aktivitas = [
        ['icon' => '🪢', 'judul' => 'Belajar Menganyam Ketupat', 'desc' => 'Pelajari seni menganyam ketupat dari daun nipah bersama pengrajin lokal yang sudah berpengalaman turun-temurun.'],
        ['icon' => '🍛', 'judul' => 'Kuliner Khas', 'desc' => 'Nikmati Soto Banjar, Coto Makassar, dan berbagai hidangan khas yang disajikan dengan ketupat produksi lokal.'],
        ['icon' => '📸', 'judul' => 'Spot Foto Instagramable', 'desc' => 'Abadikan momen di monumen ketupat raksasa, rumah warna-warni, dan tepi Sungai Mahakam dengan latar Jembatan Mahkota II.'],
        ['icon' => '🚗', 'judul' => 'Mobil Wisata Keliling', 'desc' => 'Gunakan layanan mobil wisata untuk berkeliling dan mengenal lebih dekat kawasan bersejarah Samarinda Seberang.'],
        ['icon' => '🏘️', 'judul' => 'Wisata Kampung', 'desc' => 'Jelajahi sudut-sudut kampung yang tertata rapi dan saksikan kehidupan sehari-hari masyarakat lokal yang ramah.'],
        ['icon' => '🌅', 'judul' => 'Menikmati Sungai Mahakam', 'desc' => 'Santai di area tepi sungai sambil menikmati pemandangan Sungai Mahakam yang tenang dan indah.'],
      ];
      foreach ($aktivitas as $a):
      ?>
      <div class="col-md-6 col-lg-4">
        <div class="card-kk card-body h-100">
          <div style="font-size:2rem;margin-bottom:10px;"><?= $a['icon'] ?></div>
          <h6 class="fw-bold" style="color:var(--kk-dark);"><?= $a['judul'] ?></h6>
          <p class="text-muted small mb-0"><?= $a['desc'] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require_once BASE_PATH . '/view/layout/footer.php'; ?>
