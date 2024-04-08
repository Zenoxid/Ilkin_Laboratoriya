<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegisterPage</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
<?php
$fnError=" ";
$lnError=" ";
$eError=" ";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["submit"])){
        if(empty($_POST["FN"])){
            $fnError= "Adinizi daxil edin!";
        }
        if(empty($_POST["LN"])){
            $lnError= "Soyadinizi daxil edin!";
        }
        if(empty($_POST["E"])){
            $eError= "Email-inizi daxil edin!";
        }
    }
}
?> 
    <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?> method="post">
            <img style="margin-left: 30%" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/register-design-template-08f14379984c86336ca1869f84e4a9c7_screen.jpg?ts=1570783154" width="15%" height="15%"><br>
            <label style="margin-left: 35%" for="enter">Register panel:</label><br><br>
            <label style="margin-left: 27%" for="FN">First name:</label>
            <input style="margin-left: 3px" type="text" id="FN" name="FN"><span class="error">* <?php echo $fnError;?></span><br><br>
            <label style="margin-left: 27%" for="LN">Last name:</label>
            <input style="margin-left: 4px" type="text" id="LN" name="LN"><span class="error">* <?php echo $lnError;?></span><br><br>
            <label style="margin-left: 28.9%" for="E">Email:</label>
            <input style="margin-left: 4px" type="email" id="E" name="E"><span class="error">* <?php echo $eError;?></span><br><br>
            <label class="error" style="margin-left: 35%" for="enter">* requires filling</label><br><br>
            <input style="margin-left: 36%" type="submit" name="submit" value="Register">
    </form>
</body>
</html>