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



    ?>


</body>
</html>
