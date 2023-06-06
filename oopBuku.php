<?php
class Buku
{
    public $judul;
    public $tahun;
    public $penulis;

    public function __construct($judul,$tahun,$penulis)
    {
        $this->judul = $judul;
        $this->tahun = $tahun;
        $this->penulis = $penulis;
    }
    public function getData ()
    {
        echo "Saya membeli buku yang berjudul" .$this -> judul.
        "tahun" . $this-> tahun.
        "yang ditulis oleh" .$this -> penulis;

    }
}
$buku = new Buku ("petarung jalanan",1990,"obot");
$buku -> getData();
