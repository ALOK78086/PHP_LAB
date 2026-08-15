<?php
include("db.php");

if(isset($_POST['save']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $course=$_POST['course'];

    mysqli_query($conn,
    "INSERT INTO students(name,email,course)
    VALUES('$name','$email','$course')");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>CRUD Operation</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Student Management System</h2>

<form method="post">
<input type="text" name="name" placeholder="Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="text" name="course" placeholder="Course" required>

<button type="submit" name="save">Save</button>
</form>

<table border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Course</th>
<th>Action</th>
</tr>

<?php
$result=mysqli_query($conn,"SELECT * FROM students");

while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['course']; ?></td>

<td>
<a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>

<a href="delete.php?id=<?php echo $row['id']; ?>">
Delete
</a>
</td>
</tr>
<?php
}
?>

</table>

</body>
</html>