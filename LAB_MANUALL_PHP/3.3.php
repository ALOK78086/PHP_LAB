<!-- 3.3 Write a PHP script to use cookie with header -->

<?php

setcookie("user","Alok",time()+3600);

header("Location: welcome.php");

exit();

?>
<?php

if(isset($_COOKIE['user']))
{
    echo "Welcome ".$_COOKIE['user'];
}

?>
