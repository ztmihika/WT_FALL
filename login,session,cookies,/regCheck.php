<?php 
	session_start();

	$name = $_POST['name'];
    $phoneNum = $_POST['phoneNo'];
	$email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $dob = $_POST['d'];
    $website = $_POST['website'];
	$address = $_POST['address'];

	if($name == null || $password== null || $email == null || $phoneNum == null || $address == null || $gender == null || $dob == null ||$website == null){
		echo "Please make sure all are filled up";
	}
	else{
		$file = fopen('admin.txt', 'a');
		$admin = $name."|".$password."|".$email."|".$phoneNum."|".$address."|".$gender."|".$dob."|".$website."|"."\r\n";
		fwrite($file, $admin);

		if($file == 'create'){
				header('location: Home.php');
			}
		else{
			header('location: LogIn.html');
		}
	}
?>