<?php require_once BASE_PATH . '/view/layout/header.php'; ?>
<?php $event_json = json_encode($semua_event); ?>
<section class="section-kk" style="padding-top:50px;">
  <div class="container">
    <div class="text-center mb-5 reveal">
      <span class="section-label">Agenda</span>
      <h1 class="section-title">Kalender Event</h1>
      <p class="section-subtitle">Jadwal kegiatan dan acara di Kampung Ketupat Warna Warni</p>
    </div>
    <?php if (empty($semua_event)): ?>
      <div class="text-center py-5 text-muted">
        <i class="bi bi-calendar-x fs-1 d-block mb-3"></i>
        <p>Belum ada event yang tersedia. Pantau terus halaman ini!</p>
      </div>
    <?php else: ?>
      <div id="app-event"></div>
    <?php endif; ?>
  </div>
</section>
<script>window.__EVENT_DATA__ = <?= $event_json ?>;</script>
<?php require_once BASE_PATH . '/view/layout/footer.php'; ?>
