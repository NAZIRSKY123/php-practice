<!DOCTYPE html>
<html>
<body>
<form action="upload_file.php" method="POST" enctype="multipart/form-data">
 Pilih file untuk diunggah:
 <input type="file" name="fileToUpload"><br>
 <input type="submit" value="Upload File" name="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $target_dir = "uploads/";
 $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
 
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
{ 
 echo "File " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " telah
diunggah."; 
} else {
 echo "Pengunggahan file gagal.";
 }
}
?>
</body>
</html>