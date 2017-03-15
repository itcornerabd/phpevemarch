<?php 	
		$fruits = [
					5=>['name'=>'Apple', 'price'=>50 , 'quantity'=>20],
					10=>['name'=>'Mango', 'price'=>60 , 'quantity'=>80],
					2=>['name'=>'Orange', 'price'=>20 , 'quantity'=>30]	
				  ];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>	Table</title>

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
 	<table width="500px">
 		<tr>
 			<th>Sr No</th>	
 			<th>Name</th>
 			<th>Price</th>
 			<th>Quantity</th>
 		</tr>

 		<?php 
 			$i=1;
 		foreach ($fruits as $key => $fruit):?>	
 		 <tr>
 		 	<td><?=$i++;?></td>	
 			<td><?=$fruit['name'];?></td>
 			<td >Rs <?=$fruit['price'];?>/-</td>
 			<td><?=$fruit['quantity'];?></td>
 		</tr>
 		<?php endforeach ?>
 	</table>	
</center>
 
 </body>
 </html>  