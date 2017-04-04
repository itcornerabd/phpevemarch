<?php 	
	include 'inc.php';

	$statement =$pdo->prepare(  "SELECT m.id , m.name , m.cast, m.duration, m.active , c.name as categoryname from movies as m , categories as c where c.id =m.category_id ");

	$statement->execute();

	$movies=$statement->fetchall(PDO::FETCH_ASSOC);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Movies Data</title>

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
<a href="addmovie.php">add</a>
<?php  if(count($movies)>0):?>	
	<table width="700px">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>cast</th>
			<th>duration</th>
			<th>category</th>
			<th>Details</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>		


	<?php 	foreach($movies as $movie): ?>		
		<tr>
			<td><?=$movie['id']?></td>
			<td><?=$movie['name']?></td>
			<td><?=$movie['cast']?></td>
			<td><?=$movie['duration']?> Min.</td>
			<td><?=$movie['categoryname']?></td>
			<td> <a href="detail.php?id=<?=$movie['id']?>"> Details </a> </td>
			<td> <a href="editmovie.php?id=<?=$movie['id']?>"> Edit </a> </td>
			<td>
			<?php if($movie['active']): ?>	
			 <a href="delete.php?id=<?=$movie['id']?>&action=delete"> Delete </a>
			<?php else: ?> 	
			<a href="delete.php?id=<?=$movie['id']?>&action=revert"> Revert </a>
			<?php endif  ?>	

			 </td>
		</tr>
	<?php 	endforeach ?>
	</table>
<?php 	else: ?>
		<h2>	No Movies Found</h2>
<?php 	endif ?>
</center>

</body>
</html>