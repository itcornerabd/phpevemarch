<?php 
	
	$fruits = [
				['name'=>'apple',  'price'=>50 , 'quantity'=>50 ],
				['name'=>'mango',  'price'=>80 , 'quantity'=>60 ],
				['name'=>'orange',  'price'=>90 , 'quantity'=>10 ]
			 ];

	//echo $fruits[2]['name'];
	//var_dump($fruits);

	foreach($fruits as $fruit  )
	{
		foreach ($fruit as $property  => $value) 
			{
				 echo " $property is $value"; 
			}	
			echo "<br>";
	}


 ?>