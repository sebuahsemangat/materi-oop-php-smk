<?php

require_once 'koneksi.php';

class Siswa {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    public function ShowAll() {
        $query = "SELECT * FROM siswa";
        $stmt = $this->db->query($query);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "ID: " . $row['id'] . "<br>";
            echo "Nama: " . $row['nama'] . "<br>";
            echo "Kelas: " . $row['kelas'] . "<br>";
            echo "====================<br>";
        }
    }
}
$siswa = new Siswa();
$siswa -> ShowAll();