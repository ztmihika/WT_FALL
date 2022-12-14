<?php
	session_start();
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title>Manage Manager | Admin</title>
</head>
<body>
	<center>
			<fieldset>
				<h2>Manage Manager</h2>
				<table>
					<tr>
						<td>
							<a href="ManagerRegistration.php">Add New Manager</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="Managerlist.php">View Manager List</a>
						</td>
					</tr>
					<tr>
						<td>
						<br> </br>
							<a href="Admin.php"> Back </a>
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</center>
</body>
</html>
<?php
	}
	else {
		header('location:LogIn.html');
	}
?>