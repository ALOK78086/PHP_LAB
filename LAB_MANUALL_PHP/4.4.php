<!-- 4.4 Demonstrate PHP MySQL Prepared Statements -->

<?php

$conn = new mysqli("localhost","root","","college");

$stmt = $conn->prepare("INSERT INTO students(name,email) VALUES(?,?)");

$name = "Alok Kumar";
$email = "alok@gmail.com";

$stmt->bind_param("ss",$name,$email);

$stmt->execute();

echo "Record Inserted Successfully";

$stmt->close();
$conn->close();

?>
