<!-- 3.10 Store Registration Form Details Into Users Table -->

<?php

$conn = mysqli_connect("localhost","root","","college");

if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(name,email,password)
            VALUES('$name','$email','$password')";

    if(mysqli_query($conn,$sql))
    {
        echo "Registration Successful";
    }
    else
    {
        echo "Error";
    }
}

?>

<form method="post">

Name :
<input type="text" name="name" required><br><br>

Email :
<input type="email" name="email" required><br><br>

Password :
<input type="password" name="password" required><br><br>

<input type="submit" name="register" value="Register">

</form>



CREATE TABLE users
(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50),
email VARCHAR(50),
password VARCHAR(50)
);
