<?php 
	
	//GET 
	

	//var_dump($_GET);

	if(isset($_GET['id']))
	echo "id is ". $_GET['id'];

	if(isset($_GET['name']))
	echo "<br>name is ". $_GET['name'];

	
	//var_dump($_POST);

	if(isset($_POST['name']))
		echo " <br> name is ".$_POST['name'];

	if(isset($_POST['password']))
		echo "<br> password is ".$_POST['password'];

	if(isset($_POST['address']))
		echo "<br>address is ".$_POST['address'];

	if(isset($_POST['city']))
		echo "<br>city is ".$_POST['city'];

	if(isset($_POST['gender']))
		echo "<br>gender is ".$_POST['gender'];

	if(isset($_POST['chksport']))
		echo "<br>Hobby is  ".$_POST['chksport'];
	
	if(isset($_POST['chksing']))
		echo "<br>Hobby is  ".$_POST['chksing'];
	
	if(isset($_POST['chkdance']))
		echo "<br>Hobby is  ".$_POST['chkdance'];



	if(isset($_POST['chk']))
	{
		$chk = $_POST['chk'];

		foreach($chk as $hobby)
		{
			echo "<br> sekected hobby is ".$hobby;
		}

	}








 ?>