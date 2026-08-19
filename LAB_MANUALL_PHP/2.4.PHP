<!-- 2.4 Write a PHP program to demonstrate string functions -->

<?php

$str = "Welcome To PHP Programming";

echo "String : ".$str."<br><br>";

// strlen()
echo "Length : ".strlen($str)."<br>";

// strpos()
echo "Position of PHP : ".strpos($str,"PHP")."<br>";

// str_word_count()
echo "Word Count : ".str_word_count($str)."<br>";

// strrev()
echo "Reverse String : ".strrev($str)."<br>";

// strtolower()
echo "Lowercase : ".strtolower($str)."<br>";

// strtoupper()
echo "Uppercase : ".strtoupper($str)."<br>";

?>
