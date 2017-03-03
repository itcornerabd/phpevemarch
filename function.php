<?php 

	$p=2000;
	$r=2;
	$t=2;

	echo si($p,$r,$t);
	echo "<br>". si(5000,3,2);
	echo "<br>".si(6000,2,2);
	echo "<br>".si(8000,2,3);
	echo "<br>".si(1000);
	echo "<br>".si(10000,3);


	function si($p,$r=3,$t=2)
	{
		$simple_interest = $p*$r*$t/100;

		return $simple_interest;
	}







 ?>