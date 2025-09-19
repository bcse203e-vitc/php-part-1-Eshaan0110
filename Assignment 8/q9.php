<?php
$temps = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$average = array_sum($temps) / count($temps);
sort($temps);
$lowest = array_slice($temps, 0, 7);
$highest = array_slice($temps, -7);
echo "Average Temperature is : $average<br>";
echo "Seven lowest temperatures : " . implode(", ", $lowest) . "<br>";
echo "Seven highest temperatures : " . implode(", ", $highest) . "<br>";
?>