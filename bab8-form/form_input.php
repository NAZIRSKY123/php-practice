<!DOCTYPE html>
<html>
<body>
<form method="POST" action="form_input.php">
 Nama: <input type="text" name="nama"><br>
 Email: <input type="email" name="email"><br>
 <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $nama = $_POST['nama'];
 $email = $_POST['email'];
 echo "Nama: $nama, Email: $email";
}
?>
</body>
</html>