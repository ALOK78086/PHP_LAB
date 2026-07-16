<?php
define("COLLEGE", "ABC College");

$name = "Alok";
$semester = "5th";
$marks = 450;
$total = 500;
$percentage = ($marks / $total) * 100;

echo "<h2>Previous Semester Result</h2>";
echo "College Name: " . COLLEGE . "<br>";
echo "Student Name: " . $name . "<br>";
echo "Semester: " . $semester . "<br>";
echo "Marks Obtained: " . $marks . "<br>";
echo "Total Marks: " . $total . "<br>";
echo "Percentage: " . $percentage . "%";
?>