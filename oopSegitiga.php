<?php
class Segitiga{
    public $Alas;
    public $Tinggi;

    public function luas(){
        echo 0.5 * $this->Alas * $this->Tinggi;
    }
}
$segitiga1 = new Segitiga();
$segitiga1 -> Alas= 8; 
$segitiga1 -> Tinggi= 12;
$segitiga1 -> luas();