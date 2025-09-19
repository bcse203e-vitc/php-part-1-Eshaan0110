<?php
$array = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");

// a) ascending order sort by value
asort($array);
print_r($array);

// b) ascending order sort by key
ksort($array);
print_r($array);

// c) descending order sort by value
arsort($array);
print_r($array);

// d) descending order sort by key
krsort($array);
print_r($array);
?>