<?php 
	include 'inc.php';

	$name = input('name');
	$cast = input('cast');
	$duration = input('duration');
	$plot = input('plot');	
	$category_id = input('category_id');
	$submit = input('submit');

	$errormsg=[];
	if(!empty($submit))
	{
		if(empty($name))
			$errormsg[] = "please enter name";

		if(empty($cast))
			$errormsg[]="please enter cast";

		if(empty($duration))
			$errormsg[]="please eneter duration";

		if(!is_numeric($duration))
			$errormsg[]="please enter numric duration ";

		if(count($errormsg)==0)
		{
			$statement = $pdo->prepare('insert into movies (name,cast,duration,plot,category_id) values (?,?,?,?,?) ');


			$result = $statement->execute([$name,$cast,$duration,$plot,$category_id]);
			if($result)
				header("location:index.php");
			else
				die("error in insert query");

		}	
	}	 
	$statement  = $pdo->prepare('select * from categories');
	$statement->execute();
	$categories = $statement->fetchall(PDO::FETCH_ASSOC);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Add new movie</title>
 	<style type="">
 		table ,tr,td,th
 		{
 			border:1px solid black;
 			border-collapse: collapse;
 		}
 	</style>

 </head>
 <body>
 	<?php if(count($errormsg)>0): ?>
 		<ul>
 		<?php foreach($errormsg as $msg): ?>
 			<li><?=$msg?></li>
 		<?php endforeach ?>	
 		</ul>
 	<?php endif ?>	


 	<form action="" method="POST">
 		<center>
 		<table width="500px">
 			<tr>
 				<td>Name</td>
 				<td>
 					<input type="text" name="name" value="<?=$name?>" >
 				</td>
 			</tr>
 			<tr>
 				<td>Cast</td>
 				<td>
 					<input type="text" name="cast"  value="<?=$cast?>">
 				</td>
 			</tr>
 			<tr>
 				<td>Duration</td>
 				<td>
 					<input type="number" name="duration">
 				</td>
 			</tr>
 			<tr>
 				<td>Plot</td>
 				<td>
 					<textarea name="plot"></textarea>
 				</td>
 			</tr>
 			<tr>
 				<td>Category</td>
 				<td>
 					<select name="category_id">
 						<option>Select Category</option>
 						<?php foreach($categories as $category): ?>
 							<option value="<?=$category['id']?>"><?=$category['name']?> </option>
 						<?php endforeach ?>	
 					</select>
 				</td>
 			</tr>
 			<tr>
 				<td colspan="2">
 					<center>
 						<input type="submit" name="submit" value="SAVE">
 					</center>
 				</td>
 			</tr>
 		</table>
 		</center>
 	</form>
 </body>
 </html>