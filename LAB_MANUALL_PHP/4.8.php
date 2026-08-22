<!-- 4.8 Demonstrate LIMIT Clause -->

<?php

$conn = mysqli_connect("localhost","root","","college");

$sql = "SELECT * FROM students LIMIT 3";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result))
{
    echo $row['id']." ";
    echo $row['name']." ";
    echo $row['email']."<br>";
}

?>
