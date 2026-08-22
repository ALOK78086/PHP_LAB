<!-- 4.5 Select Data From a MySQL Database -->

<?php

$conn = mysqli_connect("localhost","root","","college");

$sql = "SELECT * FROM students";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result))
{
    echo $row['id']." ";
    echo $row['name']." ";
    echo $row['email']."<br>";
}

?>
