<?php 
	session_start();
	
	require_once "../model/adminModel.php";
	
	
	$email = $_POST['Email'];
	$password = $_POST['Password'];
	$usertypeAdmin = "Admin";
	
	$AdminStatus = adminLogin($email, $password, $usertypeAdmin);
	if($AdminStatus)
	{
		$_SESSION['status'] = true;
		$data = adminUpdateProfile($email, $password);
		$_SESSION['email'] = $email;
		$_SESSION['user'] = $data['username'];
		$_SESSION['pic'] = $data['pic'];
		setcookie('status', 'true', time()+3600, '/');
		header('location: ../view/Admin.php');
	}
	else
	{
		echo "Incorrect Password";
	}
?>