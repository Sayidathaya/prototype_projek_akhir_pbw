<?php
// ============================================================
// FILE: model/AdminModel.php
// Model autentikasi admin
// ============================================================

class AdminModel {
    private $db;

    public function __construct($koneksi) {
        $this->db = $koneksi;
    }

    // Cari admin berdasarkan username
    public function findByUsername($username) {
        $stmt = $this->db->prepare("SELECT * FROM admin WHERE username = ? LIMIT 1");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // Verifikasi login
    public function login($username, $password) {
        $admin = $this->findByUsername($username);
        if ($admin && password_verify($password, $admin['password'])) {
            return $admin;
        }
        return false;
    }
}
