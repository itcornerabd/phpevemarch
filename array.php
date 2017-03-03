<?php 


	$fruits = ['Orange','Mango','Apple'];
			// = array('asd','adas')


	echo $fruits[2];

	//var_dump($fruits);
	//print_r($fruits);

	$count =count($fruits);
	echo "<br>".$count;

	for ($i=0; $i <$count ; $i++) 
	{ 
		echo  "<br>". $fruits[$i];
	}

	$person = [ 'name' => 'Dhiraj', 
				 'age'=>28,
				 'location'=>'Abad',
				 'subject'=>'php'
			]; 
	//var_dump($person);

	$count =count($person);
	echo "<br>".$count;

	echo $person['age'];

	foreach($person as $property=>$value)
	{
		echo "<br>$property is  $value";
	}

 ?>