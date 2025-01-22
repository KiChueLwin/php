<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register Process</title>
</head>
<body>
<h1>Register Process</h1>
<?php
	if(isset($_POST['submit']))
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$pwd = $_POST['pwd'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		//$club = $_POST['club'];
		$address = $_POST['address'];
		$country = $_POST['country'];
		$username = $_POST['username'];
		$confirm_pwd = $_POST['confirm_pwd'];

		if ($pwd ==$confirm_pwd)
		
		{   echo "First Name: ".$fname."<br>";
			echo "Last Name: ".$lname."<br>";
			echo "Email: ".$email."<br>";
			echo "Password: ".$pwd."<br>";
			echo "Date of Birth: ".$dob."<br>";
			echo "Gender: ".$gender."<br>";
			echo "Address: ".$address."<br>";
			echo "Country: ".$country."<br>";
			//echo "Club: ".$club."<br>";
	
			
			if (isset($_POST['club']))
			{
				$club =$_POST['club'];
			 
				echo "Joined Club: <br><ol>";
				foreach ($club as $key => $value) 
				{
					echo "<li>$value</li>";
				}
				echo "</ol>";
			}
			else
			{
				echo "No club! <br>";
	
			}
            
			echo "Username:" .$username."<br>";
	    
		}
		else
		{
	    
          echo"Your passswords are not match.Type again!";

		
		}// confirm password



    }
 

 
?>

<hr>
<a href="register.php">Go back</a>

</body>
</html>
