<?php
$conn = new mysqli("localhost", "root", "", "latihan");
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ $nama = $_POST['nama'];
 // Menggunakan prepared statement untuk menghindari SQL Injection
 $stmt = $conn->prepare("SELECT * FROM pengguna WHERE nama = ?");
 $stmt->bind_param("s", $nama);
 $stmt->execute();
 $result = $stmt->get_result();
 while ($row = $result->fetch_assoc()) {
 echo "ID: " . $row["id"] . " - Nama: " . $row["nama"] . "<br>";
}
}
?>