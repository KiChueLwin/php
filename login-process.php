<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Process</title>
</head>
<body>
    <h1>Login Process</h1>

    <?php





    if(isset($_POST['login'])){

        ///////////////////////////////////////////////////////////////

        $email=$_POST['email'];
        $pwd=$_POST['pwd'];
        // $correctusername= "ki";
         $correctemail = "ki@gmail.com";
        $correctpassword = "ki1111";

        if($email==$correctemail){
            echo "Email successful.<br> ";
            if($pwd==$correctpassword){
                // echo "Login successful";
                echo "<script>window.alert('Login success')</script>";

                echo "<script>window.location.herf='main.php'</script>";

                echo"Email:".$email."<br>";
                echo"Password:".$pwd."<br>";
            }
            else{
                echo "Password Incorrect!";
            }   
        }
        else{
            echo "Email incorrect!";
        }
        

    
    }
    else{
        echo "<script>window.location.herf='login.php'</script>";
    }

///////////////////////////////////////////////////////////////////////////////////////////////////


  ---------------->  Alternative way  to login <---------

        $email=$_POST['email'];
        $pwd=$_POST['pwd'];

        // testing for data carrying
        // echo "$email";
        // echo "$pwd";

        $sql = "select * from customer where email='$email'";

        $result = mysqli_query($connect,$sql);
        $num_rows = mysqli_num_rows($result);

        if($num_rows==1)
        {
            $record=mysqli_fetch_assoc($result);
            $hashed_pw= $record['Password'];

            if(password_verify($pwd,$hashed_pw))
            {
                echo "Login successful!";  
            }
            else
            {
                echo "Invalid Password! Please try again!";
            }
        }
        else
        {
            echo "Your email is invalid!";
        }


      ?>


</body>
</html>
