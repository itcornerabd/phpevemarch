<?php 

$pdo = new PDO('mysql:host=localhost;dbname=testdb','root','');
	if(!$pdo)
		die("Error in connection");



	function input($control , $is_string=true )
	{
		if(isset($_REQUEST[$control]))
			return $_REQUEST[$control];
		else
			{ 
				if($is_string)	
					return "";
				else
					return [];
			}
	}

 ?>