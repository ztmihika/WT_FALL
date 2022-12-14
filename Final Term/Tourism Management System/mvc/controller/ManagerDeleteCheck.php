<?php 
	session_start();
	require_once "../model/managerModel.php";
	if(isset($_COOKIE['status'])){
	
	$username = $_SESSION['user'];
		
	$password = $_POST['Password'];
	$conpassword = $_POST['Confirm_Password'];

	$status = managerDelete($username, $password);
	if($status = true)
	{
		echo "Profile Deleted.";
?>
<html>
<body>
	<tr>
	<td>
		<br></br>
		<a href="../controller/LogOut.php"> Back </a>
	</td>
	</tr>
</body>
</html>
<?php
	}
	else {
		header('location: ../view/LogIn.html');
	}
}
?>