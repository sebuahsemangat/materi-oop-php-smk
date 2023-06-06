<?php
class Segitiga{
    public $alas;
    public $tinggi;
    protected $luas;
    public function __construct($alas, $tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function hitungLuas(){
        $this->luas = 0.5 * $this->alas * $this->tinggi;
        echo "Luas segitiga adalah ". $this->luas;
    }
}
$segitiga1 = new Segitiga(4, 5);
$segitiga1 -> hitungLuas();