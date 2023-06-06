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

        $result = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        }

        return $result;
    }
    public function InsertData($nis, $nama, $kelas) {
        $query = "INSERT INTO siswa (nis, nama, kelas) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$nis, $nama, $kelas]);

        return $stmt->rowCount();
    }
}
