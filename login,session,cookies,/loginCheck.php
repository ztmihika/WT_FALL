<?php 
	session_start();
	
	$username = $_POST['UserName'];
	$password = $_POST['Password'];
	

	if($username == null || $password == null){
		echo "Please enter your data again.";
?>		
<html>
<body>
	<tr>
		<td>
			<br></br>
			<a href="LogIn.html"> Back </a>
		</td>
	</tr>
<?php
	}
	
	
	else {
		$file = fopen('admin.txt', 'r');
		
		while (!feof($file)) {
			$data=fgets($file);
			$admin = explode('|', $data);
			if($username == trim($admin[0]) && $password == trim($admin[1])){
				$_SESSION['status'] = true;
				$_SESSION['user'] = $username;
				setcookie('status', 'true', time()+3600, '/');
				header('location: Home.php');
			}
		}
	}

	

	
?>		
	<tr>
		<td>
			<br></br>
			<a href="LogIn.html"> Back </a>
		</td>
	</tr>
</body>
</html>
