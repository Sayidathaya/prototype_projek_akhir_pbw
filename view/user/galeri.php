<?php require_once BASE_PATH . '/view/layout/header.php'; ?>
<?php
// Pass data galeri ke Vue via JS
$galeri_json = json_encode($semua_galeri);
?>
<section class="section-kk" style="padding-top:50px;">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="section-label">Foto</span>
      <h1 class="section-title">Galeri Wisata</h1>
      <p class="section-subtitle">Koleksi foto Kampung Ketupat Warna Warni Samarinda</p>
    </div>
    <div id="app-galeri"></div>
  </div>
</section>

<script>window.__GALERI_DATA__ = <?= $galeri_json ?>;</script>
<?php require_once BASE_PATH . '/view/layout/footer.php'; ?>
