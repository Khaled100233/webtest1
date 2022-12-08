<?php
session_start();
require 'includes/config.php';
require 'includes/users_functions.php';

//if(checkLogin()) // waiting for the log out button
	//header("LOCATION: index.php");


if(count($_POST)>0)
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(adminlogin($username,$password))
		header("LOCATION: adminpage.php");
	else
		echo 'invalid login data';
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <form class="fu" method="post">
     
        <b>User Name: </b><input type="text" name="username" /> <br /><br/>
        <b>Password: </b><input id="pswd" type="password" name="password" /> <br /><br/>
        <button type="submit">Login</button>
        
    </form>

</body>
</html>

<!--form action="login.php" method="post">
username <input type="text" name="username" /> <br />
password <input type="password" name="password" /> <br />
<button type="submit">login</button>
</form-->