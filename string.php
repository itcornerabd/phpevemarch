<?php 

	$str = "Hello World";

	$strlen = strlen($str);

	echo " size of string is $strlen";


	echo "<br>". strpos($str, "World"); // if found return position otherwise  false case sensative	
	echo "<br>". stripos($str, "world"); //case insensative

	echo "<br>".strrpos($str, "o"); // search from reverse

	echo "<br>".strripos($str, "O"); //search from reverse and case insensative

	echo "<br>" .str_replace("World", "PHP",$str); //case sensative

	echo "<br>" .str_ireplace("world", "PHP",$str);

	echo "<br>" . substr($str,10,5);

	$str2= "Hello world";

	//strcmp == str==str2 case sensative
	//strcasecmp case insensative

	if(strcasecmp($str, $str2)==0)
		echo "strings are equal";
	else
		echo "not equal";

	echo strtoupper($str);

	$name = "Alok Choudhary";

	$spacepos = strpos($name," ");

	echo "<br>".substr($name,0,$spacepos );
	echo "<br>".substr($name,$spacepos+1,strlen($name)-$spacepos);		







 ?>