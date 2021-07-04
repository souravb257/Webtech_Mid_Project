<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style>
		img{
			margin-left: 100px;
            margin-bottom: 12px;
		}
	</style>
</head>
<body>
		<h3>Login Page</h3>

		<form method="post" action="../controller/loginCheck.php">
			<fieldset>
				<legend>Login</legend>
				<table>
					<img src="adminn.jpg" alt="" width="100" height="100" align="center" class="img">
					<tr>
						<td>Username</td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td></td>
					<td>
						<input type="checkbox" name="remember"> Remember Me 
						
					</td>
				</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Submit"></td>
						<td><a href="registration.php">Not Register Yet?</a></td><br>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>