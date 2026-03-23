<?php $menu_aktif = 'galeri'; require_once BASE_PATH . '/view/admin/layout_admin_header.php'; ?>

<div class="row justify-content-center">
  <div class="col-lg-7">
    <div class="card border-0 shadow-sm">
      <div class="card-body p-4">
        <h6 class="fw-bold mb-4">Edit Foto Galeri</h6>
        <form action="<?= BASE_URL ?>/aksi/edit-galeri" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $data_galeri['id'] ?>" />
          <div class="mb-3">
            <label class="form-label fw-500">Judul Foto <span class="text-danger">*</span></label>
            <input type="text" name="judul" class="form-control" value="<?= htmlspecialchars($data_galeri['judul']) ?>" required />
          </div>
          <div class="mb-3">
            <label class="form-label fw-500">Kategori</label>
            <select name="kategori" class="form-select">
              <?php foreach (['umum','wisata','kuliner','budaya','fasilitas'] as $kat): ?>
              <option value="<?= $kat ?>" <?= $data_galeri['kategori'] === $kat ? 'selected' : '' ?>><?= ucfirst($kat) ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label fw-500">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="3"><?= htmlspecialchars($data_galeri['deskripsi'] ?? '') ?></textarea>
          </div>
          <div class="mb-3">
            <?php
              $src = str_starts_with($data_galeri['foto'], 'http') ? $data_galeri['foto'] : BASE_URL . '/assets/uploads/galeri/' . $data_galeri['foto'];
            ?>
            <label class="form-label fw-500">Foto Saat Ini</label>
            <div><img src="<?= htmlspecialchars($src) ?>" style="height:120px;border-radius:8px;object-fit:cover;" /></div>
          </div>
          <div class="mb-4">
            <label class="form-label fw-500">Ganti Foto <small class="text-muted">(kosongkan jika tidak ingin ganti)</small></label>
            <input type="file" name="foto" class="form-control" accept=".jpg,.jpeg,.png,.webp" />
          </div>
          <div class="d-flex gap-2">
            <button type="submit" class="btn btn-kk"><i class="bi bi-save me-1"></i>Perbarui</button>
            <a href="<?= BASE_URL ?>/admin/galeri" class="btn btn-outline-secondary">Batal</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php require_once BASE_PATH . '/view/admin/layout_admin_footer.php'; ?>
