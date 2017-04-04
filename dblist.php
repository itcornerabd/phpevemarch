<?php 
	// 1. connect to database a
	// 2 . query prepare 
	// 3 . query excuete
	// 4. process result 
	//error_reporting(0);

	$con = mysqli_connect("localhost" , "root" ,"","testdb" ); 	

	if(!$con)
		die("Error in Connection please try again");

	$query = "select id,name  , duration from movies";

	$rows= mysqli_query($con,$query);	

	if(!$rows)
		die("Error in fetching moivies");

	//var_dump($rows);

	// $rs=mysqli_fetch_array($rows);
	// $rs=mysqli_fetch_array($rows);
	$movies = mysqli_fetch_all($rows , MYSQL_ASSOC);
	//echo "<pre>";
	//var_dump($movies);

 ?>	

<!DOCTYPE html>
<html>
<head>
	<title>List </title>
</head>
<body>

	<ul>
		<?php foreach($movies as $movie): ?>
					<li><?=$movie['name'];?> , <?=$movie['duration'];?> Min</li>
		<?php endforeach ?>
	</ul>


</body>
</html>