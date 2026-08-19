<!-- 2.5 Write a PHP code for Type Casting using settype() and gettype() -->

<?php

$var = "100";

echo "Value = ".$var."<br>";
echo "Data Type = ".gettype($var)."<br><br>";

settype($var,"integer");

echo "After Type Casting<br>";
echo "Value = ".$var."<br>";
echo "Data Type = ".gettype($var);

?>
