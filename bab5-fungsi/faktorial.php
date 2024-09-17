<?php
function factorial($number){ 
 if ($number <= 1) { 
 return 1; 
 } else {
 return $number * factorial($number - 1);
 }
}
echo "Faktorial dari 5 adalah: " . factorial(5);
