<!-- 3.1 Write a PHP script to create cookie in a form -->

<?php

if(isset($_POST['submit']))
{
    $name = $_POST['name'];

    setcookie("username",$name,time()+3600);

    echo "Cookie Created Successfully";
}

?>

<form method="post">
    Enter Name :
    <input type="text" name="name" required>

    <input type="submit" name="submit" value="Create Cookie">
</form>
