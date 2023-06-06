<?php

class Database {
    private $host = 'localhost'; // Ganti sesuai dengan host database Anda
    private $dbName = 'oop_crud'; // Ganti sesuai dengan nama database Anda
    private $username = 'root'; // Ganti dengan username database Anda
    private $password = ''; // Ganti dengan password database Anda
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Koneksi berhasil!";
        } catch (PDOException $e) {
            die("Koneksi gagal: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->pdo;
    }
}