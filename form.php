<?php 

	function input($control , $is_string=true )
	{
		if(isset($_POST[$control]))
			return $_POST[$control];
		else
			{ 
				if($is_string)	
					return "";
				else
					return [];
			}
	}

	$name = input('name');
	$password = input('password');
	$address = input('address');
	$city=input('city');
	$gender= input('gender');
	$chk = input('chk' ,false);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Demo	</title>
	<link rel="stylesheet" type="text/css" href="./table.css">
</head>
<body>

	<a href="action.php?id=1&name=abc">go to action page</a>	

	
	<form   name="form1" id="form1" method="POST">
		<center>
		<table width="500px">
			<tr>
				<td>Name</td>
				<td>
					<input type="text" name="name" placeholder="enter your name" value="<?=$name;?>" >
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="password" value="<?=$password?>"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td>
					<textarea name="address"><?=$address?></textarea>

				</td>
			</tr>
			<tr>
				<td>City</td>
				<td>
					<select name="city">
						<option value="">select city</option>
						<option value="ABD" <?php if($city=="ABD") {echo "selected";} ?>  >A.bad </option>
						<option value="PUN"  <?php if($city=="PUN") {echo "selected";} ?> >Pune</option>
						<option value="MUM"  <?php if($city=="MUM") {echo "selected";} ?> >Mumbai</option>
					</select>	

				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" value="MALE"  name="gender" <?php if($gender=="MALE") {echo "checked";} ?>  > Male
					<input type="radio" value="FEMALE" name="gender" <?php if($gender=="FEMALE") {echo "checked";} ?> > Female
				</td>
			</tr>
			<tr>
				<td>Hobbies</td>
				<td>
					<input type="checkbox" name="chksport" value="SPORT"> Sport
					<input type="checkbox" name="chksing" value="SING" > Singing
					<input type="checkbox" name="chkdance" value="DANCE"> Dancing
				</td>
			</tr>

			<tr>
				<td>Hobbies</td>
				<td>
					<input type="checkbox" name="chk[]" value="SPORT" <?php if(in_array("SPORT", $chk)) {echo "checked";} ?> > Sport
					<input type="checkbox" name="chk[]" value="SING" <?php if(in_array("SING", $chk)) {echo "checked";} ?> > Singing
					<input type="checkbox" name="chk[]" value="DANCE" <?php if(in_array("DANCE", $chk)) {echo "checked";} ?>> Dancing
					<input type="checkbox" name="chk[]" value="READ" <?php if(in_array("READ", $chk)) {echo "checked";} ?>> Reading

				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="button" name="btn"  value="Button">
					<input type="submit" name="submit" >
					<input type="reset" name="">
				</td>
			</tr>

		</table>
		</center>
	</form>	

</body>
</html>