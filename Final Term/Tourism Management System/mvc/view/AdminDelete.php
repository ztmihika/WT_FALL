<?php
	session_start();
	
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title>Delete Profile | Admin</title>
</head>
		<form method="post" action="../controller/AdminDeleteCheck.php" enctype="">
			<fieldset>
				<legend>Delete Profile</legend>
				<table>
					<tr>
						<td>Password</td>
						<tr></tr>
						<td><input type="password" name="Password" value="" ></td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<tr></tr>
						<td><input type="password" name="Confirm_Password" value="" ></td>
					</tr>
						<td>
						<br> </br>
							<input type="submit" name="" value="Confirm">
							<a href="../view/Admin.php"> Back </a>
						</td>
					</tr>
				</table>
			</fieldset>
		</form>

</body>
</html>
<?php
	}
	else {
		header('location:LogIn.html');
	}
?>