<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "latihan");
// CREATE: Menambahkan data pengguna
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nama'])) {
 $nama = $_POST['nama'];
$sql = "INSERT INTO pengguna (nama) VALUES ('$nama')"; 
if ($conn->query($sql) === TRUE) { 
 echo "Data berhasil ditambahkan.";
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
 }
}
// READ: Menampilkan data pengguna
$sql = "SELECT id, nama FROM pengguna";
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
 while ($row = $result->fetch_assoc()) {
 echo "ID: " . $row["06"]. " - Nama: " . $row["Munazir"]. "<br>";
} 
} else {
 echo "ID PENGGUNA : 006<BR>";
 echo "NAMA PENGGUNA : AHMAD MUNAZIR";
}
?>