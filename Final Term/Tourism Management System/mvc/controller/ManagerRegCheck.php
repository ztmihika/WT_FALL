<?php 
	session_start();
	if(isset($_COOKIE['status'])){
		
	require_once "../model/managerModel.php";
	
	$UserName = $_POST['username'];
	$Email = $_POST['email'];
	$Address = $_POST['address'];
    $Division = $_POST['division'];
    $PostalCode = $_POST['postalcode'];
	$ContactNumber = $_POST['contnum'];
	$Gender = $_POST['gender'];
	$DateOfBirth = $_POST['dob'];
	$BloodGroup = $_POST['BloodGroup'];
	$Password = $_POST['Password'];
	$conpassword = $_POST['Confirm_Password'];
	$usertype = "Manager";
	
	$srcCV = $_FILES['cv']['tmp_name'];
    $desCV = "../assets/cv/".$_FILES['cv']['name'];

    move_uploaded_file($srcCV, $desCV);
	
	$srcPic = $_FILES['picture']['tmp_name'];
    $desPic = "../assets/picture/".$_FILES['picture']['name'];

    move_uploaded_file($srcPic, $desPic);
	
	$error = false;
	
	$status = false;
	
	if(strlen($PostalCode) != 4)
	{
		echo "Invalid PostalCode. ";
		$error = true;
	}
	
	if(strlen($ContactNumber) != 11)
	{
		echo "Invalid phone number. ";
		$error = true;
	}
	
	if(strlen($Password) < 8)
	{
		echo "Password can't be less than 8. ";
		$error = true;
	}
	
	$data = managerUpdateProfile($Email);
	
	
	if($data != false)
	{
		echo "This email is already exist. Try different email. ";
		$error = true;
	}
	
	if($error == false)
	{
		$status = managerReg($UserName, $usertype, $Email, $Password, $Address, $Division, $PostalCode, $ContactNumber, $Gender, $DateOfBirth, $BloodGroup, $desCV, $desPic);
		if($status = true)
		{
			echo "New Manager Added.";
		}
	}
}
?>
<html>
<body>
	<tr>
	<td>
		<br></br>
		<a href="../view/ManagerRegistration.php"> Back </a>
	</td>
	</tr>
</body>
</html>