<!-- 2.1 Write a PHP code to create numeric array for Monday to Saturday, associative array for month with total days and multidimensional array for laptop details -->

<?php

// Numeric Array
$days = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

echo "<h3>Numeric Array</h3>";
foreach($days as $day)
{
    echo $day."<br>";
}

// Associative Array
$months = array(
    "January"=>31,
    "February"=>28,
    "March"=>31,
    "April"=>30,
    "May"=>31,
    "June"=>30,
    "July"=>31,
    "August"=>31,
    "September"=>30,
    "October"=>31,
    "November"=>30,
    "December"=>31
);

echo "<h3>Associative Array</h3>";
foreach($months as $month=>$days)
{
    echo $month." => ".$days."<br>";
}

// Multidimensional Array
$laptop = array(
    "HP"=>array(
        "Model"=>"HP 15",
        "Price"=>55000
    ),
    "Dell"=>array(
        "Model"=>"Inspiron 15",
        "Price"=>60000
    )
);

echo "<h3>Multidimensional Array</h3>";

foreach($laptop as $company=>$details)
{
    echo "Company : ".$company."<br>";
    echo "Model : ".$details['Model']."<br>";
    echo "Price : ".$details['Price']."<br><br>";
}

?>
