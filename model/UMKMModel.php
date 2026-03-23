<?php
// ============================================================
// FILE: model/UMKMModel.php
// Model untuk data UMKM lokal Kampung Ketupat
// ============================================================

class UMKMModel {
    private $db;

    public function __construct($koneksi) {
        $this->db = $koneksi;
    }

    public function getAll() {
        $result = $this->db->query("SELECT * FROM umkm ORDER BY created_at DESC");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM umkm WHERE id = ?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function countAll() {
        $result = $this->db->query("SELECT COUNT(*) as total FROM umkm");
        return $result->fetch_assoc()['total'];
    }

    public function tambah($nama, $pemilik, $kategori, $deskripsi, $produk, $kontak, $alamat, $foto) {
        $stmt = $this->db->prepare("INSERT INTO umkm (nama_umkm, pemilik, kategori, deskripsi, produk_unggulan, kontak, alamat, foto) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bind_param('ssssssss', $nama, $pemilik, $kategori, $deskripsi, $produk, $kontak, $alamat, $foto);
        return $stmt->execute();
    }

    public function update($id, $nama, $pemilik, $kategori, $deskripsi, $produk, $kontak, $alamat, $foto = null) {
        if ($foto) {
            $stmt = $this->db->prepare("UPDATE umkm SET nama_umkm=?, pemilik=?, kategori=?, deskripsi=?, produk_unggulan=?, kontak=?, alamat=?, foto=? WHERE id=?");
            $stmt->bind_param('ssssssssi', $nama, $pemilik, $kategori, $deskripsi, $produk, $kontak, $alamat, $foto, $id);
        } else {
            $stmt = $this->db->prepare("UPDATE umkm SET nama_umkm=?, pemilik=?, kategori=?, deskripsi=?, produk_unggulan=?, kontak=?, alamat=? WHERE id=?");
            $stmt->bind_param('sssssssi', $nama, $pemilik, $kategori, $deskripsi, $produk, $kontak, $alamat, $id);
        }
        return $stmt->execute();
    }

    public function hapus($id) {
        $data = $this->getById($id);
        $stmt = $this->db->prepare("DELETE FROM umkm WHERE id=?");
        $stmt->bind_param('i', $id);
        if ($stmt->execute() && $data && $data['foto']) {
            $file = BASE_PATH . '/assets/uploads/umkm/' . $data['foto'];
            if (file_exists($file)) unlink($file);
            return true;
        }
        return false;
    }
}
