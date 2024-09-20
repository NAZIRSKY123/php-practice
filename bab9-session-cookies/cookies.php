<?php
// Menyimpan cookie
setcookie("nama_pengguna", "John Doe", time() + 3600); // Berlaku selama 1 jam
// Akses data dari cookie
if (isset($_COOKIE["nama_pengguna"])) {
 echo "Nama pengguna dari cookie: " . $_COOKIE["nama_pengguna"];
} else {
 echo "Cookie tidak ada.";
}
?>