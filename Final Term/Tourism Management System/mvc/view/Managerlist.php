<?php
	session_start();
	
	require_once "../model/managerModel.php";
	
	if(isset($_COOKIE['status'])){
?>
<html>
<head>
	<title>Manager List | Manager</title>
</head>
<body>
		<h2>Manager List: </h2>
		<form method="POST" action="">
        <input type="email" id="search" name="" value="" placeholder = "Search by email">
        <input type="button" id="click" name="submit" value="Search" onclick="Search()"> 
		<h3></h3>
		<h1></h1>
        </form>
<?php
	managerlist();
    }
?>
		<tr>
			<td>
				<br> </br>
				<a href="../view/Manager.php"> Back </a>
			</td>
		</tr>
		<script>
		function Search(){
            let search = document.getElementById('search').value;
            let jsearch = {'search': search};
            let json = JSON.stringify(jsearch);

            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', 'managerlistSearch.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('data='+json);

            xhttp.onreadystatechange = function (){

                if(this.readyState == 4 && this.status == 200){
                    document.getElementsByTagName('h3')[0].innerHTML = this.responseText;
					document.getElementsByTagName('h1')[0].innerHTML = "-----------------------------------------------------------------------------------------------------------";
                }
            } 
        }
		</script>
</body>
</html>