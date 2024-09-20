<?php
class Kendaraan { 
 public $nama; 
 public $kecepatan;
 
 public function infoKendaraan() {
 echo "Nama: $this->nama, Kecepatan: $this->kecepatan km/jam.";
}
}
class Motor extends Kendaraan
{ 
public $jenis;
public function infoMotor() {
 echo "Jenis Motor: $this->jenis. ";
 $this->infoKendaraan();
 }
}
$motor1 = new Motor();
$motor1->nama = "Honda";
$motor1->kecepatan = 150; $motor1->jenis = "Sport";
$motor1->infoMotor();
?>