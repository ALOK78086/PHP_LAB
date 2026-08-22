<!-- 4.10 Edit Profile Page -->

<?php

$conn = mysqli_connect("localhost","root","","college");

$id = 1;

$result = mysqli_query($conn,"SELECT * FROM users WHERE id=$id");

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    mysqli_query($conn,
    "UPDATE users
     SET username='$username',
         password='$password'
     WHERE id=$id");

    echo "Profile Updated Successfully";
}

?>

<form method="post">

Username :
<input type="text"
name="username"
value="<?php echo $row['username']; ?>">

<br><br>

Password :
<input type="text"
name="password"
value="<?php echo $row['password']; ?>">

<br><br>

<input type="submit"
name="update"
value="Update Profile">

</form>
