<?php 

// Creating an associative array 
$name_one = array("Zack"=>"Zara", "Anthony"=>"Any", 
					"Ram"=>"Rani", "Salim"=>"Sara", 
					"Raghav"=>"Ravina"); 

// Looping through an array using foreach 
echo "Looping using foreach: \n"; 
foreach ($name_one as $val => $val_value){ 
	echo "Husband is ".$val." and Wife is ".$val_value."\n"; 
} 

// Looping through an array using for 
echo "\nLooping using for: \n"; 
$keys = array_keys($name_one); 
$round = count($name_one); 

for($i=0; $i < $round; ++$i) { 
	echo $keys[$i] . ' ' . $name_one[$keys[$i]] . "\t"; 
} 

?> 
