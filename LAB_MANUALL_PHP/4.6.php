<!-- 4.6 Delete Data Using MySQLi -->

<?php

$conn = mysqli_connect("localhost","root","","college");

$sql = "DELETE FROM students WHERE id=1";

if(mysqli_query($conn,$sql))
{
    echo "Record Deleted Successfully";
}

?>
<!-- 4.6 Delete Data Using PDO -->

<?php

$conn = new PDO("mysql:host=localhost;dbname=college","root","");

$sql = "DELETE FROM students WHERE id=1";

$conn->exec($sql);

echo "Record Deleted Successfully";

?>
