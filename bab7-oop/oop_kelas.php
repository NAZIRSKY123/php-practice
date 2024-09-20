<?php 
class Mobil { 
 public $merk; 
 public $tahun;
 public function infoMobil() {
 echo "Mobil merk $this->merk, dibuat tahun $this->tahun.";
}
}
$mobil1 = new Mobil();
$mobil1->merk = "Toyota";
$mobil1->tahun = 2020;
$mobil1->infoMobil();
?>