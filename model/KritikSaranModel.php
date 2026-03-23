<?php
// ============================================================
// FILE: model/KritikSaranModel.php
// ============================================================

class KritikSaranModel {
    private $db;

    public function __construct($koneksi) {
        $this->db = $koneksi;
    }

    public function getAll() {
        $result = $this->db->query("SELECT * FROM kritik_saran ORDER BY created_at DESC");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM kritik_saran WHERE id = ?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function countBelumDibaca() {
        $result = $this->db->query("SELECT COUNT(*) as total FROM kritik_saran WHERE sudah_dibaca = 0");
        return $result->fetch_assoc()['total'];
    }

    public function countAll() {
        $result = $this->db->query("SELECT COUNT(*) as total FROM kritik_saran");
        return $result->fetch_assoc()['total'];
    }

    public function simpan($nama, $email, $jenis, $pesan) {
        $stmt = $this->db->prepare("INSERT INTO kritik_saran (nama_pengunjung, email, jenis, pesan) VALUES (?,?,?,?)");
        $stmt->bind_param('ssss', $nama, $email, $jenis, $pesan);
        return $stmt->execute();
    }

    public function tandaiDibaca($id) {
        $stmt = $this->db->prepare("UPDATE kritik_saran SET sudah_dibaca = 1 WHERE id = ?");
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }

    public function hapus($id) {
        $stmt = $this->db->prepare("DELETE FROM kritik_saran WHERE id = ?");
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }
}
