<?php 
	$a=1;

	if($a>5)
		$b="10";

	if(isset($b)) // true or false
		echo $b;
	else 
		{
			//echo "b is not defined";
			//exit(1);
			die(" some error occured");
		}	
	
	if(is_int($b)) // true/false
		echo "<br> b is integer";
	else
		echo " <br> b is not integer";	

	if(is_numeric($b))
		echo " <br>b is numeric ";
	else
		echo " <br>b is not  numeric ";

	// is_string is_float is_array




 ?>