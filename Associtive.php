<?php 

// One way to create an associative array 
$name_one = array("Zack"=>"Zara", "Anthony"=>"Any", 
				"Ram"=>"Rani", "Salim"=>"Sara", 
				"Raghav"=>"Ravina"); 

// Second way to create an associative array 
$name_two["zack"] = "zara"; 
$name_two["anthony"] = "any"; 
$name_two["ram"] = "rani"; 
$name_two["salim"] = "sara"; 
$name_two["raghav"] = "ravina"; 

// Accessing the elements directly 
echo "Accessing the elements directly:\n"; 
echo $name_two["zack"], "\n"; 
echo $name_two["salim"], "\n"; 
echo $name_two["anthony"], "\n"; 
echo $name_one["Ram"], "\n"; 
echo $name_one["Raghav"], "\n"; 

?> 
