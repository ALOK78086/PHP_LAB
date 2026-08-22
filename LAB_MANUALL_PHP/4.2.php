<!-- 4.2 Create a MySQL Table Using MySQLi -->

<?php

$conn = mysqli_connect("localhost","root","","college");

$sql = "CREATE TABLE students
(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50),
email VARCHAR(50)
)";

if(mysqli_query($conn,$sql))
{
    echo "Table Created Successfully";
}
else
{
    echo "Error Creating Table";
}

?>
