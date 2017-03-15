<!DOCTYPE html>
<html>
<head>
	<title>Form Demo	</title>
	<link rel="stylesheet" type="text/css" href="./table.css">
</head>
<body>

	<a href="action.php?id=1&name=abc">go to action page</a>	

	
	<form action="action.php"  name="form1" id="form1" method="POST">
		<center>
		<table width="500px">
			<tr>
				<td>Name</td>
				<td>
					<input type="text" name="name" placeholder="enter your name" value="asd">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="password"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td>
					<textarea name="address">asdasdas</textarea>

				</td>
			</tr>
			<tr>
				<td>City</td>
				<td>
					<select name="city">
						<option value="">select city</option>
						<option value="ABD" >A.bad </option>
						<option value="PUN" >Pune</option>
						<option value="MUM" selected>Mumbai</option>
					</select>	

				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" value="MALE"  name="gender" checked > Male
					<input type="radio" value="FEMALE" name="gender" > Female
				</td>
			</tr>
			<tr>
				<td>Hobbies</td>
				<td>
					<input type="checkbox" name="chksport" value="SPORT"> Sport
					<input type="checkbox" name="chksing" value="SING" checked> Singing
					<input type="checkbox" name="chkdance" value="DANCE"> Dancing
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