<!-- 1.10 Write a PHP Program to merge two arrays -->

<?php
$arr1 = array("Red","Green","Blue");
$arr2 = array("Black","White","Yellow");

$result = array_merge($arr1,$arr2);

echo "<h3>Merged Array</h3>";

print_r($result);
?>
