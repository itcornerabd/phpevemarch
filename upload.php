<?php 
	$uploadfolder = "./upload/";

	if(isset($_FILES['image']))
	{

		$tmp_name=$_FILES['image']['tmp_name'];
		$filename =$_FILES['image']['name'];

		$path = $uploadfolder.$filename; // "./upload/desert.jpg"

		$i=0;
		while(file_exists($path))
		{
			$i++;
			$pathinfo = pathinfo($filename);

			$newfilename=$pathinfo['filename'] . "$i." . $pathinfo['extension']; // desert1.jpg
			
			$path = $uploadfolder.$newfilename;
			//echo "file already exists";
			
		}
			move_uploaded_file($tmp_name, $path);		
			echo "file uploaded";
			
	//"Desert.jpg" =>  "Desert1.jpg"   =>Desert2.jpg 
	}
	
 ?>

    <!DOCTYPE html>
<html>
<head>
	<title> File Upload</title>
</head>
<body>

<form name="upload" method="POST" enctype="multipart/form-data">

<input type="file" name="image">
	<br>
	<br>
<input type="submit" name="submit" value="upload">	
	
</form>


</body>
</html>