<?php
	session_start();
	
	require_once "../model/adminModel.php";
	
	if(isset($_COOKIE['status'])){
	$email = $_SESSION['email'];
?>
<html>
<head>
	<title>Profile | Admin</title>
</head>
<body>
		<h2>Profile: </h2>
<?php
	$data = adminUpdateProfile($email);
?>
	<form method="post" action="../controller/AdminPictureUpdateCheck.php" enctype="multipart/form-data">
		<table border=1>
		<tr>
				<td>Name</td>
				<td>Email</td>
				<td>Contact Number</td>
				<td>Address</td>
				<td>Division</td>
				<td>Postal Code</td>
				<td>Gender</td>
				<td>Date of birth</td>
				<td>Blood Group</td>
				<td>Picture</td>
			</tr>
			<tr>
				<td> <?php echo $data["username"] ?></td>
				<td> <?php echo $data["email"] ?></td>
				<td> <?php echo $data["contnum"] ?></td>
				<td> <?php echo $data["address"] ?></td>
				<td> <?php echo $data["division"] ?></td>
				<td> <?php echo $data["postcode"] ?></td>
				<td> <?php echo $data["gender"] ?></td>
				<td> <?php echo $data["dob"] ?></td>
				<td> <?php echo $data["bg"] ?></td>
				<td><img src= <?php echo $data["pic"] ?> style='width:100px;height:100px';</td>
				</tr>
		</table>
		<br><br>
		<tr>
			<td>Upload a new picture</td>
			<br></br>
			<td><input type="file" name="newpicture" value="" ></td>
			<input type="submit" name="" value="Change">
		</tr>
		<tr>
			<td>
			<br> </br>
				<a href="AdminProfileUpdate.php">Update Profile</a>
			</td>
			<td>
				<a href="AdminDelete.php">Delete Profile</a>
			</td>
		</tr>
		<tr>
			<td>
				<br> </br>
				<a href="../view/Admin.php"> Back </a>
			</td>
		</tr>
	</form>
</body>
</html>
<?php
	}
	else {
		header('location:../view/LogIn.html');
	}
?>