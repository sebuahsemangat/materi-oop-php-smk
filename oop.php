<?php
class Mobil
{
   public $warna;
   public $nopol;

   public function __construct($warna, $nopol)
   {
      $this->warna = $warna;
      $this->nopol = $nopol;
   }
   public function maju()
   {
      echo "Mobil berwarna $this->warna dengan nomor polisi
      $this->nopol telah maju";
   }
}
$avanza = new Mobil("Merah Maroon", "D 1 LAN");
$avanza -> maju();
echo "<hr>";

$kijang = new Mobil("Abu-abu", "Z 123 AB");
$kijang -> maju();

echo "<hr>";
$mazda = new Mobil("Merah", 121212);
$mazda -> maju();


