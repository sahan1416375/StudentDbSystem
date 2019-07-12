<?php include("Connection.php")?>
<!DOCTYPE html>

<html>
<head>
	<title>Search Student</title>
</head>
<body>
	<form action="Connection.php" method="post">
	<table>
		<tr><td colspan="2" style="text-align: center; color: red"><h1>Enter the student details<h1></td></tr>
		<tr>
			<td><h3>Enter the std no: </h3></td>
			<td><input type="text" name="Sno"></td>
		</tr>
		<tr>
			<td><h3>Enter the std name: </h3></td>
			<td><input type="text" name="Sname"></td>
		</tr>

		<tr>
			<td>
				<button type="submit" name="submit">Submit</button>
			</td>
		</tr>
	</table>
	</form>
	<a href="Functions.php"><button>Search</button></a>
</body>
</html>