<form action="array_search.php" method="post">
	<input type="text" name="text"  value="<?php global $txt; echo $txt; ?>"/>
	<input type="submit" name="submit"/>

</form>

<?php
 $student  = array('ruhul' => '101' , 'robin' => '102' , 'ratul' => '103' , 'rob' => '104'  );



if (isset($_POST['text'])) {

	global $txt;
	$txt =$_POST['text'];
	$result = array_search($txt , $student);
	echo "you have search by $txt and match result => $result";

	}
 ?>








 