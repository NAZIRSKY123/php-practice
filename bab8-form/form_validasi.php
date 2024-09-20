<!DOCTYPE html>
<html>
<body>
<form method="POST" action="form_validasi.php">
 Nama: <input type="text" name="nama"><br>
 Email: <input type="email" name="email"><br>
 <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $nama = $_POST['nama'];
 $email = $_POST['email'];
 if (empty($nama)) {
 echo "Nama tidak boleh kosong<br>";
 } 
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
 echo "Email tidak valid<br>";
 } else {
 echo "Nama: $nama, Email: $email";
 }
}
?>
</body>
</html>