<?php

$array_one = array(1, 2, 3, 4, 5);
echo "<pre>";
print_r($array_one);
echo "</pre>";

echo "<pre>";
print_r(array_push($array_one, 6, 7));
echo "</pre>";

echo "<pre>";
print_r($array_one);
echo "</pre>";


echo "<pre>";
print_r(array_pop($array_one));
echo "</pre>";

echo "<pre>";
print_r(array_merge($array_one, array(8, 9)));
echo "</pre>";
?>