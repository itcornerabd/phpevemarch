<?php 
	
	error_reporting(E_NOTICE);
	// 0- hide all errors
	// 1 - show all errors
	// E_WARNING - show all warnings
	// E_NOTICE - show all notices
	//E_ERROR - show fatal error 


	define("PI",3.14); 

	$i=10;

	echo "Hello World";
	
	echo "PI is ".PI;

	$s = "hello";
	// echo "<br>".$i;	

	echo "<br> ". $s ;


	$a=10;
	$b=20;

	$c = $a/b;

	echo "<br>$c";

	$a += 10; // a= a+10

	echo "<br> $a";

	$d = $a++ + ++$a;

	echo "<br> $a";
	echo "<br> $d";



 ?>

