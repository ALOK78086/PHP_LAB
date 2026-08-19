<!-- 1.9 Write a PHP Program to reverse an array values entered by user -->

<?php
$arr = array(10,20,30,40,50);

$reverse = array_reverse($arr);

echo "Original Array : ";
print_r($arr);

echo "<br><br>";

echo "Reverse Array : ";
print_r($reverse);
?>
