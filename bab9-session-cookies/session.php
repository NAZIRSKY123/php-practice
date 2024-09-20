<?php
// Memulai sesi 
session_start();
// Menyimpan data di session
$_SESSION["nama_pengguna"] = "John Doe";
// Akses data dari session
echo "Nama pengguna yang tersimpan di session: " . $_SESSION["nama_pengguna"]; ?>