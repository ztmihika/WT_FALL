<?php
	session_start();
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title> Admin | Tourism Management System </title>
	<link rel="stylesheet" href="../assets/css/StyleSheet3.css">
</head>
<body>
	<div class="start">
		<h1> Tourism Management System</h1>
		
		<center>
		
		<img src=<?php echo $_SESSION['pic'] ?> width="150px" height="150px" />
		<h2><?php echo $_SESSION['user'] ?> </h2>
		<table>
		<tr>
			<td>
				<br></br>
				<a href="AdminOwnProfile.php">Profile</a>
			</td>
		</tr>
		<tr>
			<td>
			<br></br>
				<a href="AdminRegistration.php">Add New Admin</a>
			</td>
		</tr>
		<tr>
			<td>
			<br></br>
				<a href="AdminList.php">View Admin List</a>
			</td>
		</tr>
		<tr>
			<td>
			<br></br>
				<a href="ManageManager.php">Manage Manager</a>
			</td>
		</tr>
		<tr>
			<td>
			<br></br>
				<a href="AdminManageCustomer.php">Manage Customer</a>
			</td>
		</tr>
		<tr>
			<td>
			<br></br>
				<a href="AdminManageBookinglist.php">Manage Bookinglist</a>
			</td>
		</tr>
		<tr>
			<td>
			<br></br>
				<a href="ManageCV.php">View CV</a>
			</td>
		</tr>
		<tr>
			<td>
				<br> </br>
				<a href="../controller/LogOut.php">Log Out</a>
			</td>
		</tr>
		</table>
</center>


	</div>
</body>
</html>

<?php
	}
	else {
		header('location:LogIn.html');
	}
?>