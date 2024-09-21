<?php
$password = "mypassword";
$hash = password_hash($password, PASSWORD_DEFAULT); 
echo "Hash Password: " . $hash;
if (password_verify("mypassword", $hash)) { 
 echo "<br>Password valid";
} else {
 echo "<br>Password tidak valid";
}
?>