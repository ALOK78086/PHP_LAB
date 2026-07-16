<?php
$month = date("F");

echo "Current Month: " . $month . "<br><br>";

if ($month == "January")
{
    echo "Month is January<br>";
}
else
{
    echo "Month is not January<br>";
}

switch($month)
{
    case "August":
        echo "Current Month is August";
        break;

    case "September":
        echo "Current Month is September";
        break;

    default:
        echo "Current Month is " . $month;
}
?>