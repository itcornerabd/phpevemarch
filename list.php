<?php 	
	$fruits = ['Apple','Mango','Orange'];	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Demo</title>
</head>
<body>
	<ul>
	<?php 
		foreach($fruits as $fruit)
		{
			?>
				<li><?php echo $fruit;	 ?> </li>

			<?php	

		}
	?>
			
	</ul>

	<?php 	
		echo "<ul>";
		foreach ($fruits as  $fruit) 
			{
				echo "<li>$fruit</li>";
			}	

		echo "</ul>";	

	 ?>	

	<ul>
		<?php foreach($fruits as $fruit): ?>
					<li><?=$fruit;?></li>
		<?php endforeach ?>
	</ul>
	
<?php 	
		// if():
		// endif 
		
		// while:
		// endwhile
		// for:
		// endfor	


 ?>

</body>
</html>