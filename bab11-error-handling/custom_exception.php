<?php
class NegatifAngkaException extends Exception {}
function hitungFaktorial($angka) { 
 if ($angka < 0) {
 throw new NegatifAngkaException("Angka tidak boleh negatif.");
 }
 return ($angka == 0) ? 1 : $angka * hitungFaktorial($angka - 1);
}
try {
echo hitungFaktorial(-5); 
} catch (NegatifAngkaException $e) { 
 echo "Kesalahan: " . $e->getMessage();
}
?>