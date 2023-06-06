<?php
class Buah {
    protected $warna;
    protected $rasa;
    public function __construct($warna, $rasa) {
        $this->warna = $warna;
        $this->rasa = $rasa;
    }
    public function tampil()
    {
        echo "Buah ini warnanya " . $this->warna;
        echo " Buah ini rasanya " . $this->rasa;
    }
}
class Rambutan extends Buah {
    public $rambut;
    public function __construct($rambut, $warna, $rasa) {
        $this->rambut = $rambut;
        $this->warna = $warna;
        $this->rasa = $rasa;
    }
    public function getRambutan()
    {
        echo "Buah ini berwarna ". $this->warna."<br>";
        echo "buah ini rasanya ". $this->rasa. "<br>";
        echo "Buah ini memiliki rambut yang " . $this->rambut;
    }
}

$rambutanku = new Rambutan("Lurus", "Hijau", "Pahit");
$rambutanku -> getRambutan();