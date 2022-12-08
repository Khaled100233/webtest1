<?php
	session_start();
	require 'includes/config.php';
	require 'includes/clients_functions.php';

	if(count($_POST)>0)
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email    = $_POST['email'];
		$address  = $_POST['address'];
		$phone    = $_POST['phone'];

		if(addUser($username, $password, $email, $address, $phone))
		{
			header("LOCATION: userlogin.php");
			echo "User added successfully<br>";
		}
		else{
			echo "error in addition<br>";
		}
		
	}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link rel="stylesheet" href="css/login.css"-->
    <title>Sign Up</title>
	<style>
		body{
			background-image: url("registerimg.jpg");
			background-size: 100vw 100vh;
			overflow: hidden;
			text-align: center;
		}
		.fu{
			margin-top: 6cm;
			position: relative;
			display: inline-block;
			width: 25vw;
		}
		#frmbrdr{
			background-color: palegoldenrod;
			padding-top: 1cm;
			padding-bottom: 0.5cm;
			border: solid 1px black;
			border-radius: 10px;
			transition: 0.2s;
		}
		/* #frmbrdr:hover{
			opacity: 0.5;
			animation-name: opctybrdr;
			animation-duration: 1s;
			animation-timing-function: linear;
			animation-iteration-count: infinite;
			animation-direction: alternate;
			animation-delay: 0.5s;
			transition: 0.2s;
		}
		
		@keyframes opctybrdr {
			from{}
			to{opacity: 0.5;}
		}

		button{
			opacity: 0.6;
			transition: 1s;
		}
		button:hover{
			opacity: 1;
		} */
	</style>
</head>
<body>
	
    <form class="fu" method="post">
		<div id="frmbrdr"> 
        <b>User Name:</b><input type="text" name="username" /> <br/><br/>
        <b>Password: </b><input id="pswd" type="password" name="password" /> <br/><br/>
		<b>Email: </b><input type="email" name="email" /><br/><br/>
		<b>Address: </b><input type="text" name="address" /><br/><br/>
		<b>Phone Number: </b><input type="text" name="phone" /><br/><br/>
        <button type="submit">Register</button>
        <div class="signin">
            <p>Don't have an account? <a href="signup.jsp">Sign up</a>.</p>
          </div>
		</div>
    </form>
	

</body>
</html>
