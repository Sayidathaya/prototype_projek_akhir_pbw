<?php
// ============================================================
// FILE: model/EventModel.php
// Model untuk data event/kalender Kampung Ketupat
// ============================================================

class EventModel {
    private $db;

    public function __construct($koneksi) {
        $this->db = $koneksi;
    }

    public function getAll() {
        $result = $this->db->query("SELECT * FROM event ORDER BY tanggal_mulai ASC");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM event WHERE id = ?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function getAkanDatang() {
        $result = $this->db->query("SELECT * FROM event WHERE status IN ('akan_datang','berlangsung') ORDER BY tanggal_mulai ASC LIMIT 3");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function countAll() {
        $result = $this->db->query("SELECT COUNT(*) as total FROM event WHERE status != 'selesai'");
        return $result->fetch_assoc()['total'];
    }

    public function tambah($nama, $deskripsi, $tgl_mulai, $tgl_selesai, $lokasi, $foto, $status) {
        $stmt = $this->db->prepare("INSERT INTO event (nama_event, deskripsi, tanggal_mulai, tanggal_selesai, lokasi, foto, status) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param('sssssss', $nama, $deskripsi, $tgl_mulai, $tgl_selesai, $lokasi, $foto, $status);
        return $stmt->execute();
    }

    public function update($id, $nama, $deskripsi, $tgl_mulai, $tgl_selesai, $lokasi, $status, $foto = null) {
        if ($foto) {
            $stmt = $this->db->prepare("UPDATE event SET nama_event=?, deskripsi=?, tanggal_mulai=?, tanggal_selesai=?, lokasi=?, status=?, foto=? WHERE id=?");
            $stmt->bind_param('sssssssi', $nama, $deskripsi, $tgl_mulai, $tgl_selesai, $lokasi, $status, $foto, $id);
        } else {
            $stmt = $this->db->prepare("UPDATE event SET nama_event=?, deskripsi=?, tanggal_mulai=?, tanggal_selesai=?, lokasi=?, status=? WHERE id=?");
            $stmt->bind_param('ssssssi', $nama, $deskripsi, $tgl_mulai, $tgl_selesai, $lokasi, $status, $id);
        }
        return $stmt->execute();
    }

    public function hapus($id) {
        $stmt = $this->db->prepare("DELETE FROM event WHERE id=?");
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }
}
