<?php
// ============================================================
// FILE: model/GaleriModel.php
// Model untuk data galeri wisata Kampung Ketupat
// ============================================================

class GaleriModel {
    private $db;

    public function __construct($koneksi) {
        $this->db = $koneksi;
    }

    // Ambil semua galeri
    public function getAll() {
        $result = $this->db->query("SELECT * FROM galeri ORDER BY created_at DESC");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Ambil galeri berdasarkan kategori
    public function getByKategori($kategori) {
        $stmt = $this->db->prepare("SELECT * FROM galeri WHERE kategori = ? ORDER BY created_at DESC");
        $stmt->bind_param('s', $kategori);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    // Ambil galeri berdasarkan ID
    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM galeri WHERE id = ?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // Hitung total galeri
    public function countAll() {
        $result = $this->db->query("SELECT COUNT(*) as total FROM galeri");
        return $result->fetch_assoc()['total'];
    }

    // Tambah foto galeri
    public function tambah($judul, $deskripsi, $foto, $kategori) {
        $stmt = $this->db->prepare("INSERT INTO galeri (judul, deskripsi, foto, kategori) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('ssss', $judul, $deskripsi, $foto, $kategori);
        return $stmt->execute();
    }

    // Update foto galeri
    public function update($id, $judul, $deskripsi, $kategori, $foto = null) {
        if ($foto) {
            $stmt = $this->db->prepare("UPDATE galeri SET judul=?, deskripsi=?, kategori=?, foto=? WHERE id=?");
            $stmt->bind_param('ssssi', $judul, $deskripsi, $kategori, $foto, $id);
        } else {
            $stmt = $this->db->prepare("UPDATE galeri SET judul=?, deskripsi=?, kategori=? WHERE id=?");
            $stmt->bind_param('sssi', $judul, $deskripsi, $kategori, $id);
        }
        return $stmt->execute();
    }

    // Hapus foto galeri
    public function hapus($id) {
        // Ambil nama foto dulu untuk hapus file fisik
        $data = $this->getById($id);
        $stmt = $this->db->prepare("DELETE FROM galeri WHERE id=?");
        $stmt->bind_param('i', $id);
        if ($stmt->execute() && $data) {
            $file = BASE_PATH . '/assets/uploads/galeri/' . $data['foto'];
            if (file_exists($file) && !str_starts_with($data['foto'], 'http')) {
                unlink($file);
            }
            return true;
        }
        return false;
    }
}
