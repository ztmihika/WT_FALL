<?php
	session_start();
	
	require_once "../model/managerModel.php";
	
	if(isset($_COOKIE['status'])){
		
	$email = $_SESSION['email'];
	
	$data = managerUpdateProfile($email);
?>
<html>
<head>
	<title>Update Profile | Manager</title>
</head>
		<form method="post" action="../controller/ManagerProfileUpdateCheck.php" enctype="">
			<fieldset>
				<legend>Update Profile</legend>
				<table>
					<tr>
						<td>User Name</td>
						<tr></tr>
						<td><input type="text" name="upusername" value="<?php echo $data['username'] ?>" ></td>
					</tr>
					<tr>
						<td>Email</td>
						<tr></tr>
						<td><input type="email" name="upemail" value="<?php echo $data['email'] ?>" ></td>
					</tr>
					<tr>
						<td>Password</td>
						<tr></tr>
						<td><input type="password" name="upPassword" value="<?php echo $data['password'] ?>" ></td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<tr></tr>
						<td><input type="password" name="upConfirm_Password" value="<?php echo $data['password'] ?>" ></td>
					</tr>
					<tr>
						<td>Address</td>
						<tr></tr>
						<td><input type="text" name="upaddress" value="<?php echo $data['address'] ?>" ></td>
						<tr></tr>
					</tr>
					</tr>
						<td>Division</td>
						<tr></tr>
						<td>
							<select name="updivision">
							    <option value="">select option</option>
								<option <?php echo ($data['division'] == "Dhaka")?"selected":"" ?> value="Dhaka">Dhaka</option>
								<option <?php echo ($data['division'] == "Chittagong")?"selected":"" ?> value="Chittagong">Chittagong</option>
								<option <?php echo ($data['division'] == "Sylhet")?"selected":"" ?> value="Sylhet">Sylhet</option>
								<option <?php echo ($data['division'] == "Rangpur")?"selected":"" ?> value="Rangpur">Rangpur</option>
								<option <?php echo ($data['division'] == "Khulna")?"selected":"" ?> value="Khulna">Khulna</option>
								<option <?php echo ($data['division'] == "Barishal")?"selected":"" ?> value="Barishal">Barishal</option>
								<option <?php echo ($data['division'] == "Rajshahi")?"selected":"" ?> value="Rajshahi">Rajshahi</option>
								<option <?php echo ($data['division'] == "Mymensingh")?"selected":"" ?> value="Mymensingh">Mymensingh</option>
							</select>
						</td>
						<tr></tr>
					</tr>
					<tr>
						<td>Postal Code</td>
						<tr></tr>
						<td><input type="number" name="uppostalcode" value="<?php echo $data['postcode'] ?>" ></td>
					</tr>
					<tr>
						<td>Contact Number</td>
						<tr></tr>
						<td><input type="tel" name="upcontnum" value="<?php echo $data['contnum'] ?>" ></td>
					</tr>
					<tr>
						<td>Gender</td>
						<tr></tr>
						<td>
							<input type="radio" name="upgender" <?php echo ($data['gender'] == "Male")?"checked":"" ?> value= "Male" > Male
							<input type="radio" name="upgender" <?php echo ($data['gender'] == "Female")?"checked":"" ?> value= "Female" > Female
							<input type="radio" name="upgender" <?php echo ($data['gender'] == "Other")?"checked":"" ?> value= "Other" > Other
						</td>
					</tr>
					<tr>
						<td>Date Of Birth</td>
						<tr></tr>
						<td><input type="date" name="updob" value="<?php echo $data['dob'] ?>" ></td>
					</tr>
					<tr>
						<td>Blood Group</td>
						<tr></tr>
						<td>
							<select name="upBloodGroup">
							    <option value="">select option</option>
								<option <?php echo ($data['bg'] == "A+")?"selected":"" ?> value="A+">A+</option>
								<option <?php echo ($data['bg'] == "A-")?"selected":"" ?> value="A-">A-</option>
								<option <?php echo ($data['bg'] == "B+")?"selected":"" ?> value="B+">B+</option>
								<option <?php echo ($data['bg'] == "B-")?"selected":"" ?> value="B-">B-</option>
								<option <?php echo ($data['bg'] == "AB+")?"selected":"" ?> value="AB+">AB+</option>
								<option <?php echo ($data['bg'] == "AB-")?"selected":"" ?> value="AB-">AB-</option>
								<option <?php echo ($data['bg'] == "O+")?"selected":"" ?> value="O+">O+</option>
								<option <?php echo ($data['bg'] == "O-")?"selected":"" ?> value="O-">O-</option>
							</select>
						</td>
					<tr>
						<td>
						<br> </br>
							<input type="submit" name="" value="Update">
							<a href="Manager.php"> Back </a>
						</td>
					</tr>
				</table>
			</fieldset>
		</form>

</body>
</html>
<?php
	}
	else {
		header('location:LogIn.html');
	}
?>