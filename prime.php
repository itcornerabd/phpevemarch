<?php 	

	$no = 29;
	$is_divisible=false; 

	for ($i=2; $i<=sqrt($no) ; $i++) 
		{
			if($no%$i==0)
					{
						//echo "<br>$no is divisible by $i";
						$is_divisible=true;
						break;	
					}
			// else
			// 		echo "<br> $no is not divisible ny $i";	 
		}	

	if($is_divisible)
		echo "no is not prime";
	else
		echo "no is prime"


 ?>