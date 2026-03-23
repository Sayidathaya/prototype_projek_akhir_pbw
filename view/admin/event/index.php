<?php $menu_aktif = 'event'; require_once BASE_PATH . '/view/admin/layout_admin_header.php'; ?>

<?php if (isset($pesan_sukses)): ?><div class="alert-kk-success mb-3"><?= htmlspecialchars($pesan_sukses) ?></div><?php endif; ?>
<?php if (isset($pesan_error)): ?><div class="alert-kk-error mb-3"><?= htmlspecialchars($pesan_error) ?></div><?php endif; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
  <h6 class="fw-bold mb-0">Total: <?= count($semua_event) ?> event</h6>
  <a href="<?= BASE_URL ?>/admin/event?action=tambah" class="btn btn-kk btn-sm"><i class="bi bi-plus-lg me-1"></i>Tambah Event</a>
</div>

<?php if (empty($semua_event)): ?>
  <div class="text-center py-5 text-muted"><i class="bi bi-calendar-x fs-1 d-block mb-2"></i>Belum ada event.</div>
<?php else: ?>
<div class="table-responsive">
  <table class="table table-hover align-middle border-0">
    <thead class="table-light"><tr><th>Nama Event</th><th>Tanggal Mulai</th><th>Lokasi</th><th>Status</th><th>Aksi</th></tr></thead>
    <tbody>
      <?php foreach ($semua_event as $e): ?>
      <tr>
        <td class="fw-500"><?= htmlspecialchars($e['nama_event']) ?></td>
        <td><?= date('d M Y', strtotime($e['tanggal_mulai'])) ?></td>
        <td class="text-muted small"><?= htmlspecialchars($e['lokasi']) ?></td>
        <td><span class="badge <?= $e['status']==='berlangsung'?'bg-success':($e['status']==='akan_datang'?'bg-warning text-dark':'bg-secondary') ?>"><?= $e['status'] ?></span></td>
        <td>
          <a href="<?= BASE_URL ?>/admin/event?action=edit&id=<?= $e['id'] ?>" class="btn btn-outline-primary btn-sm me-1"><i class="bi bi-pencil"></i></a>
          <a href="<?= BASE_URL ?>/aksi/hapus-event?id=<?= $e['id'] ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Hapus event ini?')"><i class="bi bi-trash"></i></a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?php endif; ?>

<?php require_once BASE_PATH . '/view/admin/layout_admin_footer.php'; ?>
