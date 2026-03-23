<?php $menu_aktif = 'dashboard'; require_once BASE_PATH . '/view/admin/layout_admin_header.php'; ?>

<!-- Stat Cards -->
<div class="row g-4 mb-4">
  <div class="col-sm-6 col-lg-3">
    <div class="stat-card">
      <div class="text-muted small mb-1"><i class="bi bi-images me-1"></i>Total Foto Galeri</div>
      <div class="stat-number"><?= $stats['galeri'] ?></div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-3">
    <div class="stat-card secondary">
      <div class="text-muted small mb-1"><i class="bi bi-calendar-event me-1"></i>Event Aktif</div>
      <div class="stat-number"><?= $stats['event'] ?></div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-3">
    <div class="stat-card accent">
      <div class="text-muted small mb-1"><i class="bi bi-shop me-1"></i>UMKM Terdaftar</div>
      <div class="stat-number"><?= $stats['umkm'] ?></div>
    </div>
  </div>
  <div class="col-sm-6 col-lg-3">
    <div class="stat-card" style="border-left-color:var(--kk-secondary);">
      <div class="text-muted small mb-1"><i class="bi bi-chat-heart me-1"></i>Pesan Belum Dibaca</div>
      <div class="stat-number"><?= $stats['kritik'] ?></div>
    </div>
  </div>
</div>

<!-- Quick Actions -->
<div class="row g-3 mb-4">
  <div class="col-12">
    <div class="card p-3 border-0 shadow-sm">
      <h6 class="fw-bold mb-3">Aksi Cepat</h6>
      <div class="d-flex flex-wrap gap-2">
        <a href="<?= BASE_URL ?>/admin/galeri?action=tambah" class="btn btn-kk btn-sm"><i class="bi bi-plus me-1"></i>Tambah Foto</a>
        <a href="<?= BASE_URL ?>/admin/event?action=tambah" class="btn btn-kk btn-sm"><i class="bi bi-plus me-1"></i>Tambah Event</a>
        <a href="<?= BASE_URL ?>/admin/umkm?action=tambah" class="btn btn-kk btn-sm"><i class="bi bi-plus me-1"></i>Tambah UMKM</a>
        <a href="<?= BASE_URL ?>/admin/kritik-saran" class="btn btn-outline-secondary btn-sm"><i class="bi bi-chat me-1"></i>Lihat Pesan</a>
      </div>
    </div>
  </div>
</div>

<!-- Pesan Terbaru -->
<?php if (!empty($pesan_terbaru)): ?>
<div class="card border-0 shadow-sm">
  <div class="card-body">
    <h6 class="fw-bold mb-3">📨 Pesan Kritik & Saran Terbaru</h6>
    <div class="table-responsive">
      <table class="table table-hover align-middle">
        <thead class="table-light">
          <tr>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Pesan</th>
            <th>Tanggal</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($pesan_terbaru as $p): ?>
          <tr>
            <td class="fw-500"><?= htmlspecialchars($p['nama_pengunjung']) ?></td>
            <td><span class="badge bg-secondary"><?= $p['jenis'] ?></span></td>
            <td class="text-muted small"><?= htmlspecialchars(substr($p['pesan'], 0, 60)) ?>...</td>
            <td class="small"><?= date('d M Y', strtotime($p['created_at'])) ?></td>
            <td>
              <?php if ($p['sudah_dibaca']): ?>
                <span class="badge bg-success">Dibaca</span>
              <?php else: ?>
                <span class="badge bg-warning text-dark">Baru</span>
              <?php endif; ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <a href="<?= BASE_URL ?>/admin/kritik-saran" class="btn btn-kk-outline btn-sm">Lihat Semua Pesan</a>
  </div>
</div>
<?php endif; ?>

<?php require_once BASE_PATH . '/view/admin/layout_admin_footer.php'; ?>
