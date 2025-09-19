<?php
$x = array(1, 2, 3, 4, 5);
print_r($x);
unset($x[3]); // deleting element 4 for example
$x = array_values($x); // normalize keys
print_r($x);
?>

