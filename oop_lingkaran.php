<?php
class Lingkaran {
    public $jari;
    protected $keliling;
    public function __construct($jari){
        $this->jari = $jari;
    }
    public function hitungKeliling(){
        $this->keliling = 3.14 * $this->jari * 2;
        echo "Keliling lingkaran adalah ". $this->keliling;
    }
}
$lingkaran1 = new Lingkaran(50);
$lingkaran1 -> hitungKeliling();
