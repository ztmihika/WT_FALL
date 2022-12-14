<?php 
	session_start();
	require_once "../model/managerModel.php";
	if(isset($_COOKIE['status'])){
	$email = $_SESSION['email'];
	$srcNewPic = $_FILES['newpicture']['tmp_name'];
    $desNewPic = "../assets/picture/".$_FILES['newpicture']['name'];

    move_uploaded_file($srcNewPic, $desNewPic);
	
	$status = managerPic($email, $desNewPic);
	if($status = true)
	{
		echo "New Picture Updated.";
?>
<html>
<body>
	<tr>
	<td>
		<br></br>
		<a href="../view/ManagerOwnProfile.php"> Back </a>
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