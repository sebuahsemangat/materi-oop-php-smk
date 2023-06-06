<?php
class Persegi {
    private $luas;
    public $sisi;

    public function hitungLuas() {
        $this->luas = $this->sisi ** 2;
        echo "Luas persegi adalah " . $this->luas;
    }
}
$persegi1 = new Persegi ();
$persegi1 -> sisi = 169;
$persegi1->hitungLuas();



