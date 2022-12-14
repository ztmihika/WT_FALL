<?php
	session_start();
	
	require_once "../model/adminModel.php";
	
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title>Admin List | Admin</title>
</head>
<body>
		<h2>Admin List: </h2>
		<form method="POST" action="">
        <input type="email" id="search" name="" value="" placeholder = "Search by email">
        <input type="button" id="button" name="submit" value="Search" onclick="Search()"> 
		<h3></h3>
		<h1></h1>
        </form>
<?php
	$data = adminList();
?>

<div class ="hide">

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

			<?php while($row = mysqli_fetch_assoc($data)) { ?>
			<tr>
				<td> <?php echo $row['UserName'] ?></td>
				<td> <?php echo $row['Email'] ?></td>
				<td> <?php echo $row['ContactNumber'] ?></td>
				<td> <?php echo $row['Address'] ?></td>
				<td> <?php echo $row['Division']?></td>
				<td> <?php echo $row['PostalCode'] ?></td>
				<td> <?php echo $row['Gender'] ?></td>
				<td> <?php echo $row['DateOfBirth'] ?></td>
				<td> <?php echo $row['BloodGroup'] ?></td>
				<td><img src= <?php echo $row['PictureLocation'] ?> style='width:100px;height:100px';</td>
				</tr>
			<?php } ?>
		</table>

			</div>
		<tr>
			<td>
				<br> </br>
				<a href="../view/Admin.php"> Back </a>
			</td>
		</tr>
		<script>
		function Search(){
            let search = document.getElementById('search').value;

            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', 'AdminListSearch.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('data='+search);

            xhttp.onreadystatechange = function (){

                if(this.readyState == 4 && this.status == 200){
                    document.getElementsByTagName('h3')[0].innerHTML = this.responseText;
                }
            } 
        }
		</script>
</body>
</html>

<?php
	}
?>