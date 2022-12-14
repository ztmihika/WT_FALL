<?php 
	session_start();
	require_once "../model/adminModel.php";
	if(isset($_COOKIE['status'])){
	$email = $_SESSION['email'];
	$upname = $_POST['upusername'];
	$upemail = $_POST['upemail'];
	$upaddress = $_POST['upaddress'];
    $updivision = $_POST['updivision'];
    $uppostalcode = $_POST['uppostalcode'];
	$upcontnum = $_POST['upcontnum'];
	$upgender = $_POST['upgender'];
	$updob = $_POST['updob'];
	$upbloodgroup = $_POST['upBloodGroup'];
	$uppassword = $_POST['upPassword'];
	$upconpassword = $_POST['upConfirm_Password'];

	$status = adminUpdate($email, $upname, $upemail, $uppassword, $upaddress, $updivision, $uppostalcode, $upcontnum, $upgender, $updob, $upbloodgroup);
	if($status = true)
	{
		echo "Profile Updated.";
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