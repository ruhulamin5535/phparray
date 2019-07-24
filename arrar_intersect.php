<?php
$array_one = array(

         'a' => 'black',
         'b' => 'white',
         'c' => 'blue',
         'd' => 'red'
          );
$array_two = array(

         'e' => 'black',
         'b' => 'white',
         'g' => 'red'
         
          );
$array_three = array(

         'h' => 'black',
         'i' => 'white',
         'j' => 'green'
         
          );
	
$result= (array_intersect($array_one, $array_two, $array_three ));
echo "<pre>";

print_r($result);
echo "</pre>";

  ?>