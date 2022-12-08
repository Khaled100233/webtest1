<?php
session_start();
require 'includes/config.php';
require 'includes/users_functions.php';

//if(checkLogin())  //waiting for the log out button
	//header("LOCATION: index.php");
$invLD=false;

if(count($_POST)>0)
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(userLogin($username,$password))
		header("LOCATION: DisplayData.php");
	else
        $invLD=true;
		//echo 'invalid login data';
}


?>


<!DOCTYPE html>
<html lang="en" style="overflow-y: hidden;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body><!--background-size= width height-->
    <form class="fu" method="post">
        <?php if($invLD) echo "<span id='inv'>*Invalid login data</span><br>"; ?>
        <b>User Name: </b><input type="text" name="username" /> <br /><br/>
        <b>Password: </b><input id="pswd" type="password" name="password" /> <br /><br/>
        <button type="submit" id="btn1">Login</button>
        <div class="signin">
            <p>Don't have an account? <a href="signup.php">Sign up</a>.</p>
        </div>
        
    </form>

</body>
</html>

<!--form action="login.php" method="post">
username <input type="text" name="username" /> <br />
password <input type="password" name="password" /> <br />
<button type="submit">login</button>
</form-->