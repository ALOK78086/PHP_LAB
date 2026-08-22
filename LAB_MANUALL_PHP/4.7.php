<!-- 4.7 Update Data Using MySQLi -->

<?php

$conn = mysqli_connect("localhost","root","","college");

$sql = "UPDATE students
SET name='Rahul Kumar'
WHERE id=2";

if(mysqli_query($conn,$sql))
{
    echo "Record Updated Successfully";
}

?>
<!-- 4.7 Update Data Using PDO -->

<?php

$conn = new PDO("mysql:host=localhost;dbname=college","root","");

$sql = "UPDATE students
SET name='Rahul Kumar'
WHERE id=2";

$conn->exec($sql);

echo "Record Updated Successfully";

?>
