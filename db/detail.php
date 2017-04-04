<?php 
	include 'inc.php';	

	$id = input('id');

	if(empty($id))
		die("invalid request");

	// if(!is_numeric($id))
	// 	die("invalid request");

	// $id = mysqli_escape_string($con,$id);

	// $query = "select * from movies where id =$id ";
	// //echo $query;
	// $rows= mysqli_query($con,$query);
	// if(!$rows)
	// 	die("error in selection");

	// $movie = mysqli_fetch_array($rows,MYSQL_ASSOC);

	
	
	$statement = $pdo->prepare('select * from movies where id = ? ');

	$statement->execute([$id]);

	$movie = $statement->fetch(PDO::FETCH_ASSOC);

	//var_dump($movie);

	if(!$movie)
		die("Invalid Movie requested");


 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="">
 		table ,tr,td,th
 		{
 			border:1px solid black;
 			border-collapse: collapse;
 		}
 	</style>

</head>
<body>

<center>
	<table width="600px">
		<tr>
			<td>Name</td>
			<td><?=$movie['name']; ?></td>
		</tr>	
		<tr>
			<td>plot</td>
			<td><?=$movie['plot']; ?></td>
		</tr>
		<tr>
			<td>Duration</td>
			<td><?=$movie['duration']; ?> Min</td>
		</tr>
	</table>
</center>
</body>
</html>