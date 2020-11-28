<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<h1>Registration</h1>
	<form action="controller.php" method="POST" enctype="multiupart/form-data">
	<table>
		<tr><td>Name:</td><td><input type="text" name="tname"></td></tr>
		<tr><td>Email:</td><td><input type="email" name="tmail"></td></tr>
		<tr><td>Phone.no:</td><td><input type="number" name="tno"><td></td>
		<tr><td>Gender:</td><td><input type="radio" name="tgen" value="male">Male<input type="radio" name="tgen" value="female">Female</td></tr>
		
		<tr><td>Address:</td><td><textarea name="tadd" cols="20"></textarea></td></tr>
		<tr><td>Country:</td><td><select name="tcon">
			<option name="india">India</option>
			<option name="USA">USA</option>
			<option name="Austrelia">Austrelia</option>
			<option name="Canada">Canada</option>
		</select></td></tr>
		<tr><td>interest:</td><td>	<input type="checkbox" name="in[]" value="crecket">crecket
					<input type="checkbox" name="in[]" value="comp">comp<br>
					<input type="checkbox" name="in[]" value="onetwothree">onetwothree</td></tr>
		<tr><td><input type="submit" name="txtsubmit" value="submit"></td><td><input type="reset" name="reset" value="reset"></td><td><a href="Database_view.php">Go to database</td></tr>
</table>
	</form>	

</body>
</html>