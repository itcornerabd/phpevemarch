<?php 
	include 'inc.php';

	$id = input('id');
	$name =input('name');
	$plot= input('plot');
	$duration = input('duration');
	$cast = input('cast');
	$category_id = input('category_id');
	$submit = input('submit');

	if(!empty($submit))
	{
		$statement =$pdo->prepare('update movies set name =? , plot=?, duration=? , cast=? , category_id =? where id=? ');
	   $result = $statement->execute([$name,$plot,$duration,$cast,$category_id,$id]);
		
		if($result)
			header("location:index.php");
		else
			die("update error");
	}


	if(empty($id))
		die("invalid request");

	$statement = $pdo->prepare('select * from movies where id = ? ');

	$statement->execute([$id]);

	$movie = $statement->fetch(PDO::FETCH_ASSOC);

	//var_dump($movie);

	if(!$movie)
		die("Invalid Movie requested");


	$statement  = $pdo->prepare('select * from categories');
	$statement->execute();
	$categories = $statement->fetchall(PDO::FETCH_ASSOC);

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
	<form method="POST">
	<table width="600px">
		<tr>
			<td>Name</td>
			<td>
				<input type="text" name="name" value="<?=$movie['name']; ?>">

			</td>
		</tr>	
		<tr>
			<td>plot</td>
			<td>
			<textarea name="plot" ><?=$movie['plot']; ?></textarea>	
			</td>
		</tr>
		<tr>
			<td>Duration</td>
			<td>
			<input type="number" name="duration" value="<?=$movie['duration']; ?>">
				 Min
			</td>
		</tr>
		<tr>
			<td>Cast</td>
			<td>
				<input type="text" name="cast" value="<?=$movie['cast']?>">
			</td>
		</tr>
		<tr>
			<td>Category</td>
			<td>
				<select name="category_id">
					<option value=""> select category</option>
					<?php foreach($categories as $category): ?>
						<?php

							if($category['id']==$movie['category_id'])
								$selected="selected";
							else
								$selected="";
						  ?>	
						<option value="<?=$category['id']?>" <?=$selected?> ><?=$category['name']?>  </option>
					<?php endforeach ?>	
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<center>
					<input type="submit" name="submit" value="UPDATE">
					<input type="hidden" name="id" value="<?=$id?>">
					
				</center>
			</td>
		</tr>
	</table>
	</form>
</center>
</body>
</html>