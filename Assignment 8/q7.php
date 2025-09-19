<?php
$arr = array(1, 2, 3, 4, 5);
echo "Original array :<br>";
foreach($arr as $val) echo $val . " ";
array_splice($arr, 3, 0, '$'); // insert '$' at index 3
echo "<br>After inserting '\$' the array is :<br>";
foreach($arr as $val) echo $val . " ";
?>