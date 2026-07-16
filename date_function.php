<?php
date_default_timezone_set('Asia/Kolkata');
$date1 = date('Y-M-d :H:i:s');
echo $date1;


$date_1 = new DateTime('2026-07-07');
$date_2 = new DateTime('2023-07-07');

$finalDate = date_diff($date_1, $date_2);
echo "<br>";
echo $finalDate->format('%y years, %m months, %d days');

?>