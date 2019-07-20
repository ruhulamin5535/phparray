<?php 

// Defining a multidimensional array 
$Student = array( 
	array( 
		"name" => "Dave Punk", 
		"mob" => "5689741523", 
		"email" => "davepunk@gmail.com", 
	), 
	array( 
		"name" => "Monty Smith", 
		"mob" => "2584369721", 
		"email" => "montysmith@gmail.com", 
	), 
	array( 
		"name" => "John Flinch", 
		"mob" => "9875147536", 
		"email" => "johnflinch@gmail.com", 
	) 
); 

// Accessing elements 
echo "Dave Punk email-id is: " . $Student[0]["email"], "\n"; 
echo "John Flinch mobile number is: " . $Student[1]["mob"]; 

?> 
