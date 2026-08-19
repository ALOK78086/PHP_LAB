<!-- 1.1 Write a PHP program for print Previous Semester Result using Variables & Constants -->

<?php
define("COLLEGE", "Marwadi University");

$name = "Alok Kumar";
$semester = "Semester 1";
$percentage = 82.50;

echo "<h2>Previous Semester Result</h2>";
echo "College Name : ".COLLEGE."<br>";
echo "Student Name : ".$name."<br>";
echo "Semester : ".$semester."<br>";
echo "Percentage : ".$percentage."%";
?>