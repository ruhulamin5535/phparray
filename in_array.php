<form action="" method="post">
	<input type="text" name="text" />
	<input type="submit" name="submit"/>

</form>

<?php
 $student  = array('ruhul' , 'robin', 'ratul' , 'rob'  );



if (isset($_POST['text'])) {

	
	$txt =$_POST['text'];
	if(in_array($txt, $student)){
		echo "$txt is exist";

	}
	else{
		echo "$txt does not exit!!";
	}

	}
 ?>








 