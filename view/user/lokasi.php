<?php require_once BASE_PATH . '/view/layout/header.php'; ?>
<section class="section-kk" style="padding-top:50px;">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="section-label">Peta</span>
      <h1 class="section-title">Lokasi Kampung Ketupat</h1>
      <p class="section-subtitle">Jl. Mangkupalas, Samarinda Seberang, Kalimantan Timur</p>
    </div>
    <div class="row g-4 align-items-start">
      <div class="col-lg-5 reveal">
        <div class="card-kk card-body">
          <h5 style="color:var(--kk-primary);" class="mb-3"><i class="bi bi-geo-alt-fill me-2"></i>Informasi Lokasi</h5>
          <ul class="info-kk-list">
            <li><i class="bi bi-map-fill info-icon"></i><div><strong>Alamat Lengkap:</strong><br>Jl. Mangkupalas, Kelurahan Mesjid, Kecamatan Samarinda Seberang, Kota Samarinda, Kalimantan Timur 75251</div></li>
            <li><i class="bi bi-clock-fill info-icon"></i><div><strong>Jam Operasional:</strong><br>Setiap Hari, 08.30 – 17.30 WITA</div></li>
            <li><i class="bi bi-car-front-fill info-icon"></i><div><strong>Dari Pusat Kota Samarinda:</strong><br>±26 menit perjalanan dengan kendaraan bermotor</div></li>
            <li><i class="bi bi-ticket-perforated-fill info-icon"></i><div><strong>Tiket Masuk:</strong><br><span class="text-success fw-bold">Gratis</span></div></li>
          </ul>
          <a href="https://maps.google.com/?q=Jl.+Mangkupalas,+Samarinda+Seberang" target="_blank" class="btn btn-kk w-100 mt-3">
            <i class="bi bi-google me-2"></i>Buka di Google Maps
          </a>
        </div>
      </div>
      <div class="col-lg-7 reveal reveal-delay-1">
        <div class="map-embed">
          <iframe
            title="Lokasi Kampung Ketupat Warna Warni Samarinda"
            src="https://maps.google.com/maps?q=Kampung+Ketupat+Warna+Warni+Samarinda&z=15&output=embed"
            loading="lazy" allowfullscreen>
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require_once BASE_PATH . '/view/layout/footer.php'; ?>
