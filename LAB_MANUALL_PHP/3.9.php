<!-- 3.9 Remember Username and Password Using Cookie -->

<?php

if(isset($_POST['login']))
{
    setcookie("username",$_POST['username'],time()+3600);
    setcookie("password",$_POST['password'],time()+3600);
}

?>

<form method="post">

Username :
<input type="text" name="username"
value="<?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] : ''; ?>">

<br><br>

Password :
<input type="password" name="password"
value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : ''; ?>">

<br><br>

<input type="submit" name="login" value="Login">

</form>
