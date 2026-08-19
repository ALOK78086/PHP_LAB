<!-- 3.2 Write a PHP script to read the cookie of a form -->

<?php

if(isset($_COOKIE['username']))
{
    echo "Welcome ".$_COOKIE['username'];
}
else
{
    echo "Cookie Not Found";
}

?>
