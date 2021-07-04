<?php
if (isset($_POST['msg'])) {
	$msg = $_POST['msg'];
	if ($msg == 'password_error') {
		echo "password must not be less than 8 charcter";
		
	}
	//if ($msg == 'username_error') {
		//echo "username contain at least 2 charcter";
		
	//}
	//if ($msg == 'passwordcharcter_error') {
		//echo "Password must contain at least one of the special characters @, #, $, %";
		
	//}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
</head>
<body>
	<h3>User Registration</h3>
<div>
	<form method="post" action="../controller/registrationCheck.php" enctype="multipart/form-data">
		<fieldset>
			<legend>Please Do Registration</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
					<td>Upload your Image</td>
					<td><input type="file" name="image"><br></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Signup"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
</body>
</html>