<?php
	session_start();
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title> Homepage </title>
</head>
<body>
		<h2>Welcome <?php echo $_SESSION['user'] ?> </h2>

		<a href="List.php">View Admin List</a>

		<a href="LogOut.php">Log Out</a>
</body>
</html>
<?php
	}
	else {
		header('location:LogIn.html');
	}
?>