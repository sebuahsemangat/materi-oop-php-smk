<?php
class Penjualan {
    protected $keuntungan;
    public $hargajual;
    public $hargabeli;

    public function hitungUntung() {
    $this->keuntungan = $this->hargajual - $this->hargabeli;
    echo "Dapat keuntungan sebesar ". $this->keuntungan;
    }
}
$penjualan1= new Penjualan();
$penjualan1 -> hargajual = 10000;
$penjualan1 -> hargabeli = 7000;
$penjualan1 -> hitungUntung();