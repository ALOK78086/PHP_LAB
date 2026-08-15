<?php
include("db.php");

$id=$_GET['id'];

$data=mysqli_query($conn,
"SELECT * FROM students WHERE id=$id");

$row=mysqli_fetch_assoc($data);

if(isset($_POST['update']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$course=$_POST['course'];

mysqli_query($conn,
"UPDATE students SET
name='$name',
email='$email',
course='$course'
WHERE id=$id");

header("Location:index.php");
}
?>

<form method="post">
<input type="text" name="name"
value="<?php echo $row['name']; ?>">

<input type="email" name="email"
value="<?php echo $row['email']; ?>">

<input type="text" name="course"
value="<?php echo $row['course']; ?>">

<button name="update">
Update
</button>
</form>