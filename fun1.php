<?php 
	
	$a=10;

	foo($a);

	echo "<br>$a";
		
	function foo(&$x) //pass by refrence 
	{
		$x=20;
		echo $x;
	}	




 ?>