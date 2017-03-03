<?php 
	
	$fruits = [12=>'Apple',22=>'Orange',10=>'Mango'];

	echo "size of array is ".count($fruits);

	//print_r($fruits);
	//var_dump($fruits);
	echo "<pre>";
	var_dump( array_search("Apple", $fruits));

	var_dump(in_array("ada", $fruits));
	echo "</pre>";

	if(in_array("Mango",$fruits))
	{
		echo "found at postion ".array_search("Mango", $fruits)   ;
	}
	else
	{
		echo "not found";
	}

	$str =  implode("#", $fruits);
	
	echo "<br>$str";

	$newarray = explode( "#" , $str);

	// echo "<pre>";
	// var_dump($newarray);
	// echo "</pre>";


	echo "<pre>";
	var_dump($fruits);
	echo "</pre>";


	 // sort($fruits); //sort asc
	//rsort($fruits); //sor desc 
	//asort($fruits); // sort asc index will not change //preserved
	 //arsort($fruits);// sort desc index will not change //preserved

	//ksort($fruits); //sor key wise asc

	krsort($fruits); //sort key wise desc 

	

	echo "<pre>";
	var_dump($fruits);
	echo "</pre>";

 ?>