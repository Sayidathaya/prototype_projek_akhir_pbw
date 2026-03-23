<?php
// ============================================================
// Helper: upload foto ke direktori tertentu
// Kembalikan nama file atau false jika gagal
// ============================================================
function uploadFoto($input_name, $direktori) {
    if (!isset($_FILES[$input_name]) || $_FILES[$input_name]['error'] !== UPLOAD_ERR_OK) {
        return false;
    }
    $file     = $_FILES[$input_name];
    $ext      = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $allowed  = ['jpg', 'jpeg', 'png', 'webp'];
    $max_size = 5 * 1024 * 1024; // 5MB

    if (!in_array($ext, $allowed)) return false;
    if ($file['size'] > $max_size) return false;

    $nama_file = uniqid('kk_', true) . '.' . $ext;
    $tujuan    = BASE_PATH . '/assets/uploads/' . $direktori . '/' . $nama_file;

    if (!is_dir(BASE_PATH . '/assets/uploads/' . $direktori)) {
        mkdir(BASE_PATH . '/assets/uploads/' . $direktori, 0755, true);
    }

    return move_uploaded_file($file['tmp_name'], $tujuan) ? $nama_file : false;
}
