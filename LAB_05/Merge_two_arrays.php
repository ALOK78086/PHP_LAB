<?php
$arr1 = array("A", "B");
$arr2 = array("C", "D");

$arr3 = array_merge($arr1, $arr2);

foreach($arr3 as $value)
{
    echo $value . "<br>";
}
?>