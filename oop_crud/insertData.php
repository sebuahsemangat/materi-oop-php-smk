<?php

require_once 'siswa.php';

// Cek apakah ada data yang dikirimkan melalui metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mendapatkan data dari form
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    // Membuat objek Siswa
    $siswa = new Siswa();

    // Memanggil metode InsertData() untuk menyimpan data siswa
    $rowCount = $siswa->InsertData($nis, $nama, $kelas);

    // Cek jika proses penyimpanan berhasil
    if ($rowCount > 0) {
        // Redirect ke halaman index.php
        header('Location: index.php');
        exit;
    } else {
        echo 'Gagal menyimpan data siswa.';
    }
}

?>
