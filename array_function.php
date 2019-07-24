<?php
$name = array(
	array(
           'id' =>'201' ,
           'first_name' =>'ruhul',
           'last_name' =>'Amin'

            ),

	array(
           'id' =>'202' ,
           'first_name' =>'arif',
           'last_name' =>'ul'

            ),
	array(
           'id' =>'203' ,
           'first_name' =>'roton',
           'last_name' =>'mondol'

            )
);
$last_name =array_column($name, 'last_name','id');
echo "<pre>";

print_r($last_name);
echo "</pre>";

  ?>