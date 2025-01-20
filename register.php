<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <form action="register-process.php" method="post">
        <input type="text" name="id" placeholder="Input your first name"> <br>
        <input type="text" name="psw" placeholder="Input your last name"> <br>
        <input type="email" name="email" placeholder="Input your email"> <br>
        <input type="date" name="dob" placeholder="Input your dob"> <br>
        <input type="password" name="password" placeholder="Input your password"> <br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="prefer not to say">Prefer not to say
        <br><br>

        <label>Club:</label>
        <input type="checkbox" name="club[]" value="Music">Music
        <input type="checkbox" name="club[]" value="Tennis">Tennis
        <input type="checkbox" name="club[]" value="Game">Game
        <br><br>

        <label>Address:</label>
        <textarea name="address"></textarea>
        <br><br>

        <label>Country:</label>
        <?php
        $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", 
        "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan");

        sort($countries);

        echo "<select name='country'>";
        foreach ($countries as $country) {
        echo "<option value='$country'>$country</option>";
        }
        echo "</select>";
        ?>
        <br><br>

        <input type="submit" name="submit" value="Register">
        <input type="reset" name="clear" value="Clear">
    </form>
</body>
</html>
