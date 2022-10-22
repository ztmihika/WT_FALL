<!DOCTYPE HTML>  

<html>

<head>

    <style>

        .error {color: #FF0000;}

    </style>

</head>

<body>  

    <?php

        $nameErr = $phoneErr= $emailErr = $passwordErr= $genderErr = $dobErr= $websiteErr= $addressErr = "";

        $name = $phoneNo = $email = $password = $gender = $dob= $website =$address= "";
        $pattern='@,#,$,%';
       

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["name"])) {

            $nameErr = "Please enter a valid name";

        } else {

            $name = test_input($_POST["name"]);

            // check if name only contains letters and whitespace

            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {

            $nameErr = "Only letters and white space allowed";

            }

        }
        if (empty($_POST["phoneNo"])) {

            $phoneErr = "Enter a valid Phone Number";
        }
           $phoneNo = $_POST ["phoneNo"];  
         if (!preg_match ("/^[0-9]*$/", $phoneNo) ){  
          $phoneErr = "Only numeric value is allowed.";
        
          
         echo $phoneErr;  
           } else {  
         echo $phoneNo;  
}  


        if (empty($_POST["email"])) {

            $emailErr = "valid Email address";

        } else {

            $email = test_input($_POST["email"]);

            // check if e-mail address is well-formed

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $emailErr = "The email address is incorrect";

            }

        } 
        
        if (empty($_POST["password"])) {

            $passworder = "Please enter a password";
            $passwordErr= "Please enter a valid password"; 
        
        } 
            if (strlen($_POST["password"]) <= '6') {
                $passworder = "Your Password Must Contain At Least 8 Characters!";
            }
            
            elseif(!preg_match( "/ [@,#,$,% ]*$ /",$password)) {
                $passworder = "Your Password Must Contain At Least 1 of @,#,$,% these characters!";
            }
            
            

        if (empty($_POST["website"])) {

            $website = "";
            $websiteErr= "Please enter a valid website"; 

        } else {

            $website = test_input($_POST["website"]);

            // check if URL address syntax is valid

            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {

            $websiteErr = "Enter a valid Webiste URL";
           

            }    

        }


        if (empty($_POST["gender"])) {

            $genderErr = "Please select a gender";

        } else {

            $gender = test_input($_POST["gender"]);

        }
        if(empty($_POST["dob"])){
        
            $dobErr ="Please Enter your date of birth";
            
        }
        else
        {
            $dob = test_input($_POST["dob"]);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (empty($_POST["address"])) {
    
                $addressErr = "Please enter a valid address";
    
            } else {
    
                $address = test_input($_POST["address"]);
    
                // check if address only contains letters and whitespace
    
                if (!preg_match("/^[a-zA-Z-' ]*$/",$address)) {
    
                $addressErr = "Only letters and white space allowed";
    
                }
    
            }

       
}

    

        }

        function test_input($data) {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;

        }

    ?>

    <h2>PHP Form Validation Example</h2>

     <p><span class="error"></span></p> 

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

        FullName: <input type="text" name="name">

        <span class="error">* <?php echo $nameErr;?></span>

        <br><br>

        PhoneNo:<input type="text" name="phoneNo">

       <span class="error">* <?php echo $phoneErr;?></span>

       <br><br>

        E-mail address: <input type="text" name="email">

        <span class="error">* <?php echo $emailErr;?></span>

        <br><br>

        Password:<input type="text" name="password">

       <span class="error">* <?php echo $passwordErr;?></span>

       <br><br>

        
        Gender:

        <input type="radio" name="gender" value="female">Female

        <input type="radio" name="gender" value="male">Male

            <span class="error">* <?php echo $genderErr;?></span>

        <br><br>

        DateOfBirth:
        <input type="date" name="d" value="<?php echo date ('d-m-Y') ?>"> <br><br>



       

        Website: <input type="text" name="website">

        <span class="error"><?php echo $websiteErr;?></span>

        <br><br>

    Address: <input type="text" name="address">

        <span class="error"><?php echo $addressErr;?></span>

        <br><br>




        <input type="submit" name="submit" value="Submit">  

    </form>

    <?php

        echo "<h2> Final Output:</h2>";

        echo $name;

        echo "<br>";

        echo $phoneNo;

        echo "<br>";

        echo $email;

        echo "<br>";
        
        echo $password=($_POST["password"]);

        echo "<br>";

        echo $gender;
        echo "<br>";

        echo $dob=($_POST["dob"]);

        echo "<br>";

        echo $website;

        echo "<br>";


        echo $address;

        echo "<br>";

    ?>

</body>

</html>