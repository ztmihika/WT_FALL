<?php 
	session_start();
	
	require_once "../model/adminModel.php";
	
	$email = $_POST['email'];
	$username = $_POST['username'];
	$dob = $_POST['dob'];
	$contnum = $_POST['contnum'];
	$password = $_POST['New_Password'];
	$conpassword = $_POST['Confirm_New_Password'];
	$usertypeAdmin = "Admin";
	
	$status = adminForgotPass($username, $email, $dob, $contnum, $password, $usertypeAdmin);
	if($status == true)
	{
		echo "Password Changed";
	}
?>
<html>
<body>
		<tr>
		<td>
			<br></br>
			<a href="../view/LogIn.html"> Back </a>
		</td>
		</tr>
</body>
</html>