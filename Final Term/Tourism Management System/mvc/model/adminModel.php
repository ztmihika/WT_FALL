<?php
    require_once "DB.php";

    function adminLogin($Email, $Password, $UserType)
	{
        $conn = getConnection();
		$sql = "select * from admin where Email='{$Email}' and UserType= '{$UserType}' and Password='{$Password}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            return true;
        }else{
            return false;
        }
    }
	
	function adminUpdateProfile($email)
	{
		$conn = getConnection();
		$sql = "select * from admin where Email='{$email}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            while($row = mysqli_fetch_assoc($result)) {
				$data = [
							'username' => $row['UserName'],
							'email' => $row['Email'],
							'contnum' => $row['ContactNumber'],
							'address' => $row['Address'],
							'division' => $row['Division'],
							'postcode' => $row['PostalCode'],
							'gender' => $row['Gender'],
							'dob' => $row['DateOfBirth'],
							'bg' => $row['BloodGroup'],
							'cv' => $row['CVLocation'],
							'pic' => $row['PictureLocation'],
							'password' => $row['Password'],
						];
					return $data;
		}
        }
		else
		{
			return false;
		}
	}
	function adminList()
	{
		$conn = getConnection();
		$sql = "select * from admin";
		$result = mysqli_query($conn, $sql);
		return $result;
	}
	function adminSearch($email)
	{
		$conn = getConnection();
		$sql = "select * from admin where Email='{$email}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            while($row = mysqli_fetch_assoc($result)) {
				$data = [
							'username' => $row['UserName'],
							'email' => $row['Email'],
							'contnum' => $row['ContactNumber'],
							'address' => $row['Address'],
							'division' => $row['Division'],
							'postcode' => $row['PostalCode'],
							'gender' => $row['Gender'],
							'dob' => $row['DateOfBirth'],
							'bg' => $row['BloodGroup'],
							'cv' => $row['CVLocation'],
							'pic' => $row['PictureLocation'],
							'password' => $row['Password'],
						];
					return $data;
		}
        }else{
            echo "No data found..!!";
        }
	}
	function adminUpdate($email, $UpUserName, $UpEmail, $UpPassword, $UpAddress, $UpDivision, $UpPostalCode, $UpContactNumber, $UpGender, $UpDateOfBirth, $UpBloodGroup)
	{
		$conn = getConnection();
		$sql = "UPDATE admin SET UserName = '{$UpUserName}', Email =  '{$UpEmail}', Password =  '{$UpPassword}', Address =  '{$UpAddress}', Division =  '{$UpDivision}', PostalCode =  '{$UpPostalCode}', ContactNumber =  '{$UpContactNumber}', Gender =  '{$UpGender}', DateOfBirth =  '{$UpDateOfBirth}', BloodGroup =  '{$UpBloodGroup}' WHERE Email = '{$email}'";
		$result = mysqli_query($conn, $sql);
		return true;
	}
	function adminPic($email, $newpicture)
	{
		$conn = getConnection();
		$sql = "UPDATE admin SET PictureLocation = '{$newpicture}' WHERE Email = '{$email}'";
		$result = mysqli_query($conn, $sql);
		return true;
	}
	function adminDelete($username, $password)
	{
		$conn = getConnection();
		$sql = "DELETE from admin WHERE UserName = '{$username}' and Password =  '{$password}'";
		$result = mysqli_query($conn, $sql);
		return true;
	}
	function adminReg($UserName, $UserType, $Email, $Password, $Address, $Division, $PostalCode, $ContactNumber, $Gender, $DateOfBirth, $BloodGroup, $CVLocation, $PictureLocation)
	{
		$conn = getConnection();
		$sql = "INSERT into admin(UserName, UserType, Email, Password, Address, Division, PostalCode, ContactNumber, Gender, DateOfBirth, BloodGroup, CVLocation, PictureLocation) VALUES ('{$UserName}', '{$UserType}', '{$Email}', '{$Password}', '{$Address}', '{$Division}', '{$PostalCode}', '{$ContactNumber}', '{$Gender}', '{$DateOfBirth}', '{$BloodGroup}', '{$CVLocation}', '{$PictureLocation}')";
		$result = mysqli_query($conn, $sql);
		return true;
	}
	function adminForgotPass($UserName, $Email, $DateOfBirth, $ContactNumber, $Password, $usertype)
	{
		$conn = getConnection();
		$sql = "UPDATE admin SET Password =  '{$Password}' WHERE Email = '{$Email}' and UserName = '{$UserName}' and DateOfBirth = '{$DateOfBirth}'and ContactNumber = '{$ContactNumber}' and UserType = '{$usertype}'";
		$result = mysqli_query($conn, $sql);
		return true;
	}
?>