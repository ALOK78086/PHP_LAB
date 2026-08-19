<!-- 2.3 Write a program to perform array functions -->

<?php

// 1. array_change_key_case()
$arr = array("Name"=>"Alok","City"=>"Ara");
echo "<h3>array_change_key_case()</h3>";
print_r(array_change_key_case($arr,CASE_LOWER));

echo "<hr>";

// 2. array_chunk()
$months = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug");
echo "<h3>array_chunk()</h3>";
print_r(array_chunk($months,2));

echo "<hr>";

// 3. array_count_values()
$numbers = array(10,20,10,30,20,10);
echo "<h3>array_count_values()</h3>";
print_r(array_count_values($numbers));

echo "<hr>";

// 4. array_pop()
$fruits = array("Apple","Banana","Mango");
array_pop($fruits);
echo "<h3>array_pop()</h3>";
print_r($fruits);

echo "<hr>";

// 5. array_push()
array_push($fruits,"Orange");
echo "<h3>array_push()</h3>";
print_r($fruits);

echo "<hr>";

// 6. array_unshift()
array_unshift($fruits,"Grapes");
echo "<h3>array_unshift()</h3>";
print_r($fruits);

echo "<hr>";

// 7. array_shift()
array_shift($fruits);
echo "<h3>array_shift()</h3>";
print_r($fruits);

?>
