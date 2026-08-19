<!-- 2.2 Write a PHP code for sorting an array entered by user -->

<?php

$arr = array(45,12,78,23,10,67);

echo "<h3>Original Array</h3>";
print_r($arr);

sort($arr);

echo "<h3>Sorted Array</h3>";
print_r($arr);

?>
