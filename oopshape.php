<?php
class shape {
    protected $jumlahsisi;
}
class Persegi extends shape {
    public $sisi;
    public function __construct($jumlahsisi, $sisi)
    {
        $this->jumlahsisi = $jumlahsisi;
        $this->sisi = $sisi;
    }
    public function infoPersegi()
    {
    echo "persegi memiliki jumlah sisi" . $this->jumlahsisi;
    echo "luasnya adalah " . $this->sisi ** 2;
    }
}
class Segitiga extends shape {
    public $alas;
    public $tinggi;
public function __construct($jumlahsisi, $alas, $tinggi)
{
    $this->jumlahsisi = $jumlahsisi;
    $this->alas = $alas;
    $this->tinggi = $tinggi;
}

}
$hasilku = new Persegi(4,11);
$hasilku -> infoPersegi();
?>