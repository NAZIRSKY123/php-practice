<?php 
class Mobil { 
 private $merk; 
 private $tahun;
 public function setMerk($merk) {
 $this->merk = $merk;
 }
 public function getMerk() { 
 return $this->merk;
 }
 public function setTahun($tahun) {
 $this->tahun = $tahun;
 }
 public function getTahun() { 
 return $this->tahun;
 }
}
$mobil1 = new Mobil();
$mobil1->setMerk("Toyota");
$mobil1->setTahun(2020);
echo "Mobil merk: " . $mobil1->getMerk() . ", tahun: " . $mobil1->getTahun();
?>