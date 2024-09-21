<!DOCTYPE html>
<html>
<body>
<form method="POST" action="xss.php">
 Nama: <input type="text" name="nama"><br>
 <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
 $nama = htmlspecialchars($_POST['nama']);
 echo "Nama: $nama";
}
?>
</body>
</html>