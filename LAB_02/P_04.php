<?php
function welcomeStudent()
{
    echo "Welcome Student to PHP Programming!";
}

if(function_exists("welcomeStudent"))
{
    welcomeStudent();
}
else
{
    echo "Error: Function does not exist.";
}
?>