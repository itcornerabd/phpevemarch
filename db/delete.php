<?php 
	
	include 'inc.php';	

	$id = input('id');
	$action=input('action');


	if($action=='delete')
		$status = 0;
	else
		$status=1;


	if(empty($id))
		die("invalid request");

	// $statement = $pdo->prepare('delete from movies where id = ? ');

	$statement = $pdo->prepare('update movies set active=? where id = ? ');

	$result= $statement->execute([$status, $id]);
	
	if(!$result)
		die("error in connection");
	else
		header("location:index.php");  //echo "deleted Successfully";

 ?>