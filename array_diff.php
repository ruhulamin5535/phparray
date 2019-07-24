<?php
$array_one = array(

         'a' => 'black',
         'b' => 'white',
         'c' => 'blue',
         'd' => 'red'
          );
$array_two = array(

         'e' => 'black',
         'f' => 'purple',
         'g' => 'red'
         
          );
$array_three = array(

         'h' => 'black',
         'i' => 'yellow',
         'j' => 'green'
         
          );
	
$differ= (array_diff($array_one, $array_two, $array_three ));
echo "<pre>";

print_r($differ);
echo "</pre>";

  ?>