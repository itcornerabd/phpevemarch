<?php 

	$str  = "demo.jpg";

	$pathinfo = pathinfo($str);

	echo "<pre>";
	//var_dump($pathinfo);

	echo $pathinfo['filename'] . "1." . $pathinfo['extension'];
 ?>