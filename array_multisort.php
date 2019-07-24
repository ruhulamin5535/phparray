<?php
$array_one = array('dog','cat','animal');

$array_two = array('dog','cat','animal');
	
 array_multisort($array_one,$array_two);
echo "<pre>";
print_r($array_one);
echo "</pre>";
echo "<pre>";
print_r($array_two);
echo "</pre>";

  ?>