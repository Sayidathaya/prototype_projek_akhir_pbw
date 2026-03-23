<?php $menu_aktif = 'galeri'; require_once BASE_PATH . '/view/admin/layout_admin_header.php'; ?>

<?php if (isset($pesan_sukses)): ?><div class="alert-kk-success mb-3"><?= htmlspecialchars($pesan_sukses) ?></div><?php endif; ?>
<?php if (isset($pesan_error)): ?><div class="alert-kk-error mb-3"><?= htmlspecialchars($pesan_error) ?></div><?php endif; ?>

<div class="d-flex justify-content-between align-items-center mb-4">
  <h6 class="fw-bold mb-0">Total: <?= count($semua_galeri) ?> foto</h6>
  <a href="<?= BASE_URL ?>/admin/galeri?action=tambah" class="btn btn-kk btn-sm">
    <i class="bi bi-plus-lg me-1"></i>Tambah Foto
  </a>
</div>

<?php if (empty($semua_galeri)): ?>
  <div class="text-center py-5 text-muted"><i class="bi bi-images fs-1 d-block mb-2"></i>Belum ada foto. Tambah foto pertama!</div>
<?php else: ?>
<div class="row g-3">
  <?php foreach ($semua_galeri as $g): ?>
  <div class="col-sm-6 col-lg-4">
    <div class="card border-0 shadow-sm">
      <?php
        $src = str_starts_with($g['foto'], 'http') ? $g['foto'] : BASE_URL . '/assets/uploads/galeri/' . $g['foto'];
      ?>
      <img src="<?= htmlspecialchars($src) ?>" class="card-img-top" style="height:180px;object-fit:cover;" alt="<?= htmlspecialchars($g['judul']) ?>" />
      <div class="card-body">
        <span class="badge bg-success mb-1"><?= $g['kategori'] ?></span>
        <h6 class="fw-bold"><?= htmlspecialchars($g['judul']) ?></h6>
        <p class="text-muted small mb-2"><?= htmlspecialchars(substr($g['deskripsi'] ?? '', 0, 60)) ?></p>
        <div class="d-flex gap-2">
          <a href="<?= BASE_URL ?>/admin/galeri?action=edit&id=<?= $g['id'] ?>" class="btn btn-outline-primary btn-sm"><i class="bi bi-pencil"></i></a>
          <a href="<?= BASE_URL ?>/aksi/hapus-galeri?id=<?= $g['id'] ?>" class="btn btn-outline-danger btn-sm"
            onclick="return confirm('Hapus foto ini?')"><i class="bi bi-trash"></i></a>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>
<?php endif; ?>

<?php require_once BASE_PATH . '/view/admin/layout_admin_footer.php'; ?>
