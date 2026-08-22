<!-- 4.3 Insert Data Using MySQLi -->

<?php

$conn = mysqli_connect("localhost","root","","college");

$sql = "INSERT INTO students(name,email)
VALUES('Alok Kumar','alok@gmail.com')";

if(mysqli_query($conn,$sql))
{
    echo "Record Inserted Successfully";
}
else
{
    echo "Error";
}

?>
<!-- 4.3 Insert Data Using PDO -->

<?php

$conn = new PDO("mysql:host=localhost;dbname=college","root","");

$sql = "INSERT INTO students(name,email)
VALUES('Alok Kumar','alok@gmail.com')";

$conn->exec($sql);

echo "Record Inserted Successfully";

?>
