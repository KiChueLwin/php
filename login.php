<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h1>Login Form</h1>

    <form action="login-process.php" method="post">
        <input type="email" name="email" placeholder="Input your email"> <br>
        <input type="password" name="pwd" placeholder="Input your password"> <br>

        <br><br>
        <input type="submit" name="login" value="Login">
        <input type="reset" name="retry" value="Retry"> 

    </form>



</body>
</html>
