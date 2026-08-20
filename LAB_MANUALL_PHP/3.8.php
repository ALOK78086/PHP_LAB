<!-- 3.8 Write a PHP script to identify new or repeated user -->

<?php

if(isset($_COOKIE['visitor']))
{
    echo "Welcome Back User";
}
else
{
    setcookie("visitor","visited",time()+86400);

    echo "Welcome New User";
}

?>
