<?php
	session_start();
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title> Homepage </title>
</head>
<body>
	<div class="start">
		<h1>Welcome to Admin Page</h1>
		<a href="LogOut.php">Log Out</a>
</body>
</html>
<?php
	}
	else {
		header('location:LogIn.html');
	}
?>