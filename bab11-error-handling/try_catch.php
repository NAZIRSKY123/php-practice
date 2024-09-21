<?php 
try {
$angka = 0; 
if ($angka == 0) {
 throw new Exception("Tidak dapat membagi dengan nol.");
 }
echo 100 / $angka; 
} catch (Exception $e) {
echo "Kesalahan: " . $e->getMessage();
}
?>