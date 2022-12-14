<?php 

	require_once "../model/managerModel.php";
	
	$json =$_POST['data'];
    $jsearch= json_decode($json);
	
	$Fsearch= $jsearch->search;
	
	$data = managerSearch($Fsearch);
	
	$emailSearch = $data['email'];
	
	$username = $data['username'];
	$email = $data['email'];
	$contnum = $data['contnum'];
	$address = $data['address'];
	$division = $data['division'];
	$postcode = $data['postcode'];
	$gender = $data['gender'];
	$dob = $data['dob'];
	$bg = $data['bg'];
	$pic = $data['pic'];

    if($Fsearch == $emailSearch)
	{
		echo "<table border=1>
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
				<td>$username</td>
				<td>$email</td>
				<td>$contnum</td>
				<td>$address</td>
				<td>$division</td>
				<td>$postcode</td>
				<td>$gender</td>
				<td>$gender</td>
				<td>$bg</td>
				<td><img src=$pic style='width:100px;height:100px';</td>
			</tr>";
			
	}
  
?>