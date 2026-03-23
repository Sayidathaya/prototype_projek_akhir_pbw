<?php require_once BASE_PATH . '/view/layout/header.php'; ?>
<section class="section-kk" style="padding-top:50px;">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="section-label">Pendapat Anda</span>
      <h1 class="section-title">Kritik & Saran</h1>
      <p class="section-subtitle">Bantu kami meningkatkan kualitas wisata Kampung Ketupat dengan masukan Anda</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-7 reveal">
        <?php if ($pesan_sukses): ?>
          <div class="alert-kk-success mb-4">
            <i class="bi bi-check-circle me-2"></i><?= htmlspecialchars($pesan_sukses) ?>
          </div>
        <?php endif; ?>
        <?php if ($pesan_error): ?>
          <div class="alert-kk-error mb-4">
            <i class="bi bi-exclamation-circle me-2"></i><?= htmlspecialchars($pesan_error) ?>
          </div>
        <?php endif; ?>
        <div class="card-kk card-body">
          <h5 style="color:var(--kk-primary);" class="mb-4"><i class="bi bi-chat-heart me-2"></i>Kirim Pesan</h5>
          <!-- Vue handles validation, PHP handles submission -->
          <form id="form-kritik-saran" action="<?= BASE_URL ?>/aksi/kirim-kritik" method="POST">
            <div id="app-kritik-saran"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require_once BASE_PATH . '/view/layout/footer.php'; ?>
